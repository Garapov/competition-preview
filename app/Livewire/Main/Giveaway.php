<?php

namespace App\Livewire\Main;

use App\Models\Story;
use Livewire\Component;

class Giveaway extends Component
{
    public function mount()
    {
        $this->dispatch('render_giveaway_slider');
    }

    public function render()
    {
        return view('livewire.main.giveaway', [
            'stories' => Story::all()
        ]);
    }
}
