<?php

namespace App\Livewire\Main;

use App\Models\Category;
use App\Models\Raffle;
use Livewire\Component;

class Categories extends Component
{
    public $active = [];
    public $active_category = null;

    public function mount() {
        $this->active_category = Category::where('active', true)->first();
        if ($this->active_category) $this->active = $this->active_category->id;

        // dd($category);
    }
    public function render()
    {
        return view('livewire.main.categories', [
            'categories' => Category::where('active', true)->get(),
            'active_category' => Category::where('active', true)->first(),
            'raffles' => Raffle::where('category_id', $this->active)->get()
        ]);
    }

    public function change_category($category_id) {
        $this->active = $category_id;
        $this->active_category = Category::where('id', $category_id)->first();
    }
}
