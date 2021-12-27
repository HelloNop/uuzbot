<?php

namespace App\Http\Livewire;

use App\Models\Market;
use Livewire\Component;
use Livewire\WithPagination;

class ListMarket extends Component
{
    public $marketState = 0;
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    protected $listeners = [
        'berhasilTambahMarket' => '$refresh'
    ];

    public function render()
    {
        return view('livewire.list-market', [
            'markets' => Market::paginate(10)
        ]);
    }

    public function delete ($marketId)
    {
        $market = Market::find($marketId);
        $market->sinyals()->delete();
        $market->delete();
    }

    public function showMarketUpdate($marketId)
    {
        $market = Market::find($marketId);
        $this->name = $market->name;
        $this->candle = $market->candle;
        $this->marketState = $marketId;
    }

    public function updateMarket($marketId)
    {
        $market = Market::find($marketId);
        $market->name = $this->name;
        $market->candle = $this->candle;
        $market->save();
        $this->marketState = 0;
    }
}
