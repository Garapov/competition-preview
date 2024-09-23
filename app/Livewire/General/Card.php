<?php

namespace App\Livewire\General;

use Livewire\Component;

class Card extends Component
{
    public $class = '';
    public $image = '';
    public $name = '';
    public $end = '';
    
    public function render()
    {
        return view('livewire.general.card');
    }
}
