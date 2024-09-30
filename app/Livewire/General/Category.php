<?php

namespace App\Livewire\General;

use Livewire\Component;

class Category extends Component
{
    public $category = null;
    public function render()
    {
        return view('livewire.general.category');
    }
}
