<?php

namespace App\Livewire\General;

use App\Models\Raffle;
use Livewire\Component;

class Minicart extends Component
{
    public $isOpened = false;
    
    public function render()
    {
        // dd(\Cart::getContent());
        return view('livewire.general.minicart', [
            'product_best' => Raffle::where('price', Raffle::min('price'))->first(),
            'product_soon' => Raffle::whereBetween('end', [now()->startOfMonth(), now()->endOfMonth()])
            ->where('end', '>', now()) // assuming you only want future?
            ->orderBy('end')
            ->orderByDesc('last_trade_time')->first(),
        ]);
    }

    
}
