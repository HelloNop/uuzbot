<?php

namespace App\Http\Livewire;

use App\Models\Market;
use App\Models\Sinyal;
use Livewire\Component;

class Dashboard extends Component
{
    public $time;
    public $candle;
    public $randomNumber;


    public function render()
    {
        $this->time = date('H:i');
        $this->bar = rand(10,100);
        $this->randomNumber = rand(0,100);

        return view('livewire.dashboard',[
            'markets' => Market::has('sinyals')->with('sinyals')->get()->all()
        ]);
    }

    public function candleShow($id)
    {
        $market = Market::find($id);
        $this->candle = $market->candle;
        $this->emit('candleShowed', $market->id);
    }
}
