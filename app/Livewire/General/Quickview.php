<?php

namespace App\Livewire\General;

use App\Models\Raffle;
use Livewire\Attributes\On;
use Livewire\Component;

class Quickview extends Component
{
    public $isModalOpened = false;
    public ?Raffle $raffle = null;

    public function render()
    {
        return view('livewire.general.quickview');
    }
    
    #[On('open-quickview-modal')] 
    public function openModal($id)
    {
        
        // dd($id);
        $this->isModalOpened = true;
        $this->raffle = Raffle::where('id', $id)->first();
        // dd($this->raffle);
    }

    public function closeModal()
    {
        $this->isModalOpened = false;
        $this->raffle = null;
    }
}
