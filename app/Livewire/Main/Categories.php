<?php

namespace App\Livewire\Main;

use App\Models\Category;
use Livewire\Component;

class Categories extends Component
{
    public $active = [];

    public function mount() {
        $category = Category::where('active', true)->first();
        $this->active = $category->id;
    }
    public function render()
    {
        return view('livewire.main.categories', [
            'categories' => Category::where('active', true)->get(),
        ]);
    }

    public function change_category($category) {
        $this->active = $category;
    }
}
