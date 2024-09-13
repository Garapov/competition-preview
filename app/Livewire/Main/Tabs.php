<?php

namespace App\Livewire\Main;

use Livewire\Component;

class Tabs extends Component
{
    public array $tabs = ['TODAY', 'TOMORROW', 'SOON'];
    public string $active = 'TODAY';

    public function render()
    {
        return view('livewire.main.tabs');
    }

    public function change_tab($tabname) {
        $this->active = $tabname;
    }
}
