<?php

namespace App\Livewire\Cart\Stocks;

use App\Models\Raffle;
use Livewire\Component;

class Products extends Component
{
    public $badge = '';
    public $title = '';
    public $products;
    public $card_title = '';
    public $icon = '';
    public function mount($badge, $title, $products, $card_title, $icon)
    {
        $this->badge = $badge;
        $this->title = $title;
        $this->products = $products;
        $this->card_title = $card_title;
        $this->icon = $icon;
    } 
    public function render()
    {
        return view('livewire.cart.stocks.products');
    }
}
