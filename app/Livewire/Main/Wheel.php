<?php

namespace App\Livewire\Main;

use Livewire\Attributes\On;
use Livewire\Component;

class Wheel extends Component
{
    public $isWheelSpinning = false;
    public $spinning_time = 0;
    public $spinning_deg = 0;
    public $currentStep = 1;
    public $index = null;
    public $stepper_opened = false;
    public $sectors = [
        'jackpot',
        '£77',
        '£33',
        '£8',
        '£21',
        '£7',
        '£13',
        '£3',
        '£9'
    ];

    public function render()
    {
        return view('livewire.main.wheel');
    }

    public function setStep($step)
    {
        $this->currentStep = $step;
    }

    public function spin_wheel()
    {
        $this->currentStep = 1;
        $this->stepper_opened = false;
        $this->index = null;
        $deg = $this->spinning_deg + rand(6000, 12000);
        // dd();
        $this->isWheelSpinning = true;
        $this->spinning_time = rand(12, 20);
        $this->spinning_deg = $deg - ($deg % (360 / count($this->sectors)));


        

        $this->index = round((360 - ($this->spinning_deg % 360)) / (360 / count($this->sectors)));
        if ($this->spinning_deg % 360 == 0) $this->index = 0;

        $this->dispatch('wheel_spin', result: [
            // 'number' => $this->sectors[$this->index],
            'time' => $this->spinning_time,
            // 'deg' => $this->spinning_deg,
            // 'deg_fixed' => $this->spinning_deg % 360,
            // 'index' => $index
        ]);
    }

    #[On('wheel_result')]
    public function wheel_result()
    {
        $this->currentStep = 1;
        $this->stepper_opened = true;
    }

    public function close_stepper()
    {
        $this->currentStep = 1;
        $this->stepper_opened = false;
    }
}
