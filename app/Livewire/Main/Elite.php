<?php

namespace App\Livewire\Main;

use App\Models\Raffle;
use Livewire\Component;

class Elite extends Component
{
    public function render()
    {
        return view('livewire.main.elite', [
            'elites' => Raffle::where('is_elite', true)->get(),
        ]);
    }
}
