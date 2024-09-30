<?php

namespace App\Livewire\Main;

use Livewire\Component;

class Wheel extends Component
{
    public $isWheelSpinning = false;
    public $started = 0;
    public $spinning_time = 0;
    public $spinning_deg = 0;

    public $sectors = [
        'jackpot',
        '7',
        '33',
        '8',
        '21',
        '777',
        '13',
        '3',
        '9',
        '111',
        'qwe'
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
        $this->started = time();
        $this->spinning_time = rand(6, 12);
        $this->spinning_deg = $deg - ($deg % (360 / 9));
        // dd([
        //     $this->spinning_deg % 360
        // ]);

        $this->dispatch('wheel_spin', result: $this->sectors[($this->spinning_deg % 360) / (360 / count($this->sectors)) - 1]);
    }
}
