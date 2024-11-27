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

    public function openModal($raffle_id)
    {
        $this->dispatch('open-quickview-modal', id: $raffle_id);
    }

    
}
