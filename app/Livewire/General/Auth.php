<?php

namespace App\Livewire\General;

use Livewire\Attributes\Validate;
use Livewire\Component;
use Illuminate\Support\Facades\Auth as AuthFacade;

class Auth extends Component
{
    #[Validate('required')]
    public $email;

    #[Validate('required')]
    public $password;

    public function render()
    {
        return view('livewire.general.auth');
    }

    public function login()
    {
        $this->validate();

        $credentials = [
            'email' => $this->email,
            'password' => $this->password,
        ];

        if (AuthFacade::attempt($credentials)) {
            session()->flash('message', 'You have successfully logged in!');
        }

        session()->flash('error', 'Invalid credentials!');
    }
}
