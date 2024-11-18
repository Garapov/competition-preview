<?php

namespace App\Livewire\Raffles;

use App\Models\Raffle;
use Carbon\Carbon;
use Livewire\Component;

class Similar extends Component
{
    public function render()
    {
        return view('livewire.raffles.similar', [
            'raffles' => Raffle::where('end', '>', Carbon::now())->get(),
        ]);
    }
}
