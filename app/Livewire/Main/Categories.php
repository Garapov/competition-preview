<?php

namespace App\Livewire\Main;

use App\Models\Category;
use Livewire\Component;

class Categories extends Component
{
    public $active = [];

    public function mount() {
        $this->active = Category::where('active', true)->first();
    }
    public function render()
    {
        return view('livewire.main.categories', [
            'categories' => Category::where('active', true)->get(),
        ]);
    }
}
