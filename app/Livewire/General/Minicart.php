<?php

namespace App\Livewire\General;

use App\Models\Raffle;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Computed;
use Livewire\Component;

class Minicart extends Component
{
    public function render()
    {
        return view('livewire.general.minicart', [
            'products' => $this->products
        ]);
    }

    #[Computed()]
    protected function products()
    {
        $products = [];
        if (Session::get('cart')) {
            foreach (session()->get('cart') as $key => $item) {
                $products[$item['id']] = $item;
                $products[$item['id']]['model'] = Raffle::where('id', $item['id'])->first();
            }
        }
        
        return $products;
    }

    public function removeFromCart($id) : void
    {
        $cart = Session::get('cart');
        unset($cart[$id]);


        Session::put('cart', $cart);
    }
}
