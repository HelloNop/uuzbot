<?php

namespace App\Http\Livewire;

use App\Models\Market;
use Livewire\Component;

class CandleStick extends Component
{

    public $candle ="";
    public $mycandle;


protected $listeners = ['candleShowed' => "show"];


public function show($id)
{
    $this->candle = Market::find($id);

}

function render()
    {
        return view('livewire.candle-stick');
    }


}
