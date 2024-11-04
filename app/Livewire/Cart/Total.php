<?php

namespace App\Livewire\Cart;

use Livewire\Component;

class Total extends Component
{
    public function render()
    {
        return view('livewire.cart.total', [
            'cart' => \Cart::getContent()
        ]);
    }
}
