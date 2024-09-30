<?php

namespace App\Livewire\General;

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
    
    public function render()
    {
        return view('livewire.general.card');
    }
}
