<?php

namespace App\Livewire\General;

use Livewire\Component;

class Minicart extends Component
{
    public $isOpened = false;

    public function removeFromCart($id)
    {
        \Cart::remove($id);

        session()->flash('success', 'Item has removed !');
    }

    public function clearAllCart()
    {
        \Cart::clear();

        session()->flash('success', 'All Item Cart Clear Successfully !');
    }
    
    public function toggleCart()
    {
        $this->isOpened = !$this->isOpened;
    }
    
    public function render()
    {
        // dd(\Cart::getContent());
        return view('livewire.general.minicart', [
            'cart' => \Cart::getContent()
        ]);
    }

    
}
