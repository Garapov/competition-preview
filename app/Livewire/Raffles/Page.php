<?php

namespace App\Livewire\Raffles;

use App\Models\Raffle;
use Livewire\Component;

class Page extends Component
{
    public $id = null;

    public function mount($id)
    {
        $this->id = $id;
    }

    public function render()
    {
        return view('livewire.raffles.page', [
            'raffle' => Raffle::where('id', $this->id)->first(),
        ]);
    }
}
