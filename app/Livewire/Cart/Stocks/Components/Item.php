<?php

namespace App\Livewire\Cart\Stocks\Components;

use Livewire\Component;

class Item extends Component
{
    public $product;
    public $title = '';
    public $icon = '';
    public $badge = '';
    public function mount($product, $title, $icon, $badge) {
        $this->product = $product;
        $this->title = $title;
        $this->icon = $icon;
        $this->badge = $badge;
    }
    public function render()
    {
        return view('livewire.cart.stocks.components.item');
    }
}
