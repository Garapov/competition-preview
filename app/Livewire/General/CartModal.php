<?php

namespace App\Livewire\General;

use App\Models\Raffle;
use Livewire\Attributes\On;
use Livewire\Component;


class CartModal extends Component
{
    public $isModalOpened = false;
    public ?Raffle $raffle = null;

    public $activeTab = 'online';
    public $count = 10;

    public function render()
    {
        return view('livewire.general.cart-modal', [
            'modal_opened' => $this->isModalOpened,
            'raffle_model' => $this->raffle
        ]);
    }

    #[On('open-cart-modal')] 
    public function openModal($id)
    {

        // dd('asdasdasdasdasd');
        $this->isModalOpened = true;
        $this->raffle = Raffle::where('id', $id)->first();
    }

    public function closeModal()
    {
        $this->isModalOpened = false;
        $this->raffle = null;
        $this->activeTab = 'online';
    }

    public function changeTab($tabName)
    {
        $this->activeTab = $tabName;
    }

    public function minus() {
        if ($this->count < 2) {
            $this->count = 1;
        } else {
            $this->count--;
        }
    }

    public function plus() {
        $this->count++;
    }
}
