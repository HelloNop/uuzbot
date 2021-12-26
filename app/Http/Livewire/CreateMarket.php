<?php

namespace App\Http\Livewire;

use App\Models\Market;
use Livewire\Component;

class CreateMarket extends Component
{
    public $MarketName;
    Public $CodeCandle;

    protected $rules = [
        'MarketName' => 'required',
        'CodeCandle' => 'required',
    ];

    public function render()
    {
        return view('livewire.create-market');
    }

    public function createMarket () {
        $this-> validate();
        Market::create([
            'name' => $this -> MarketName,
            'candle' => $this -> CodeCandle
        ]);

        $this -> MarketName="";
        $this -> CodeCandle="";
        $this->emit('berhasilTambahMarket');
    }
}