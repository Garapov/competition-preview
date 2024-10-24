<?php

namespace App\Livewire\General;

use App\Models\Raffle;
use Livewire\Attributes\On;
use Livewire\Attributes\Session;
use Livewire\Component;


class CartModal extends Component
{
    public $isModalOpened = false;
    public ?Raffle $raffle = null;

    public $activeTab = 'online';
    public $count = 10;

    #[Session(key: 'cart')]
    public $cart;

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
        // dd($this->cart);
    }

    public function closeModal()
    {
        $this->isModalOpened = false;
        $this->raffle = null;
        $this->activeTab = 'online';
        $this->count = 10;
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

    public function setCount($count) {
        $this->count = $count;
    }

    public function addToCart()
    {
        if (isset($this->cart[$this->raffle->id])) {
            // Update quantity if product is already in the cart
            $this->cart[$this->raffle->id]['quantity'] += $this->count;
        } else {
            $this->cart[$this->raffle->id] = [
                'id' => $this->raffle->id,
                'name' => $this->raffle->name,
                'price' => $this->raffle->price,
                'quantity' => $this->count,
                "poster" => $this->raffle->image
            ];
        }

        $this->closeModal();

        // dd(session()->get('cart'));
    }
}
