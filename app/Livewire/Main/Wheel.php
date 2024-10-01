<?php

namespace App\Livewire\Main;

use Livewire\Component;

class Wheel extends Component
{
    public $isWheelSpinning = false;
    public $spinning_time = 0;
    public $spinning_deg = 0;

    public $sectors = [
        '1',
        '222',
        '33',
        'jackpot',
        '5',
        '23',
        '7',
        '37',
        '999',
        '22',
        '189',
        '82',
        '444',
        '555'
    ];

    public function render()
    {
        return view('livewire.main.wheel');
    }

    public function spin_wheel()
    {
        $deg = $this->spinning_deg + rand(6000, 12000);
        // dd();
        $this->isWheelSpinning = true;
        $this->spinning_time = rand(12, 20);
        $this->spinning_deg = $deg - ($deg % (360 / count($this->sectors)));


        

        $index = round((360 - ($this->spinning_deg % 360)) / (360 / count($this->sectors)));
        if ($this->spinning_deg % 360 == 0) $index = 0;

        $this->dispatch('wheel_spin', result: [
            'number' => $this->sectors[$index],
            'time' => $this->spinning_time,
            'deg' => $this->spinning_deg,
            'deg_fixed' => $this->spinning_deg % 360,
            'index' => $index
        ]);
    }
}
