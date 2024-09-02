<?php

namespace App\Livewire\General;

use Livewire\Component;

class Button extends Component
{
    public string $link;
    public string $text;
    public ?string $icon = null;
    public ?string $type = 'regular';

    public function mount($link = '#', $text = '', $icon, $type = 'regular')
    {
        $this->link = $link;
        $this->text = $text;
        if ($icon) $this->icon = $icon;
        $this->type = $type;
    }
    public function render()
    {
        return view('livewire.general.button');
    }
}
