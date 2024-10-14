<?php

namespace App\Livewire\General;

use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Card extends Component
{
    public $class = '';
    public $image = '';
    public $name = '';
    public $end = '';
    public $price = '';
    public $discount_price = '';
    public $tickets = '';
    public $id = null;

    
    public function render()
    {
        return view('livewire.general.card');
    }

    public function openModal()
    {
        $this->dispatch('open-cart-modal', id: $this->id);
    }
}
