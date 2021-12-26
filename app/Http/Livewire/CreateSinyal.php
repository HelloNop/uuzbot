<?php

namespace App\Http\Livewire;

use App\Models\Market;
use App\Models\Sinyal;
use Carbon\Carbon;
use Livewire\Component;

class CreateSinyal extends Component
{
    public $sinyal;
    public $time;
    public $open;
    public $market_id;

        protected $rules = [
        'market_id' => 'required',
        'sinyal' => 'required',
        'time' => 'required',
        'open' => 'required'
    ];

    public function render()
    {
        return view('livewire.create-sinyal', [
            'markets' => Market::latest()->get()
        ]);
    }

    public function createSinyal () {

        $this->validate();
        Sinyal::create([
            'market_id' => $this->market_id,
            'signal' => $this->sinyal,
            'waktu' => $this->time,
            'open'=>$this->open,
            'notif'=> date('H:i', strtotime('-1 minutes', strtotime($this->time)))
        ]);

        $this->emit('sinyalAdded');
    }
}
