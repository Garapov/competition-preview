<?php

namespace App\Livewire\General;

use App\Models\Raffle;
use Livewire\Attributes\On;
use Livewire\Component;


class CartModal extends Component
{
    public $isModalOpened = false;
    public ?Raffle $raffle = null;

    public function render()
    {
        return view('livewire.general.cart-modal');
    }

    #[On('open-cart-modal')] 
    public function openModal($id)
    {
        $this->isModalOpened = true;
        $this->raffle = Raffle::where('id', $id)->first();
    }

    public function closeModal()
    {
        $this->isModalOpened = false;
        $this->raffle = null;
    }
}
