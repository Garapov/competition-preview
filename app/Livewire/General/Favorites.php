<?php

namespace App\Livewire\General;

use App\Models\Raffle;
use Livewire\Component;

class Favorites extends Component
{
    public $isOpened = false;
    
    public function render()
    {
        // dd(\Cart::getContent());
        return view('livewire.general.favorites');
    }

    
}
