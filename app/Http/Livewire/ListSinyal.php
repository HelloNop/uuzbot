<?php

namespace App\Http\Livewire;

use App\Models\Market;
use App\Models\Sinyal;
use Livewire\Component;
use Livewire\WithPagination;

class ListSinyal extends Component
{
    public $selectMarket = '';
    public $sinyalUpdate = 0;

    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    protected $listeners = [
        'sinyalAdded' => '$refresh'
    ];


    public function render()
    {
        return view('livewire.list-sinyal',[
            'sinyals' => Sinyal::with('market')->orderBy('market_id','ASC')->orderBy('waktu', 'ASC')->simplePaginate(30)

        ]);
    }

    public function delete ($sinyalId) {
        $sinyal = Sinyal::find($sinyalId);
        $sinyal->delete();
    }

    public function showEditForm($sinyalId) {
        $this->UpdateStateId = $sinyalId;
    }

    public function showSinyalUpdate($sinyalId){
        $sinyal = Sinyal::find($sinyalId);
        $this->signal = $sinyal->signal;
        $this->open = $sinyal->open;
        $this->sinyalUpdate = $sinyalId;
    }
    public function updateSinyal($sinyalId)
    {
        $sinyal = Sinyal::find($sinyalId);
        $sinyal->signal = $this->signal;
        $sinyal->open = $this->open;
        $sinyal->save();

        $this->sinyalUpdate = 0;


    }
}
