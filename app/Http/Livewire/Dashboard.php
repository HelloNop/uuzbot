<?php

namespace App\Http\Livewire;

use App\Models\Market;
use App\Models\Sinyal;
use Livewire\Component;

class Dashboard extends Component
{
    public $time;

    public function render()
    {
        $this->time = date('H:i');
        $this->bar = rand(10,100);
        $this->randomNumber = rand(0,100);

        return view('livewire.dashboard',[
            'markets' => Market::with('sinyals')->get()->all()
        ]);
    }

    public function showCandle($id)
    {
        $market = Market::find($id);
        $this->emit('candleShowed', $market->id);
    }
}
