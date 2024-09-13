<?php

namespace App\Livewire\General;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth as AuthFacade;
use Illuminate\Support\Facades\Hash;

class HeaderAuth extends Component
{
    public $email;

    public $password;

    public $new_email;

    public $new_password;

    public $first_name;

    public $last_name;

    public $born;

    public bool $isLoginFormOpened = false;
    public bool $isRegisterFormOpened = false;

    public function render()
    {
        return view('livewire.general.header_auth', [
            'user' => AuthFacade::user()
        ]);
    }

    public function login()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = [
            'email' => $this->email,
            'password' => $this->password,
        ];

        if (AuthFacade::attempt($credentials)) {
            session()->flash('message', 'You have successfully logged in!');
        }

        session()->flash('error', 'Invalid credentials!');
    }

    public function register()
    {
        $this->validate([
            'new_email' => 'required|unique:users|email',
            'new_password' => 'required',
            'first_name' => 'required',
        ]);

        $credentials = [
            'name' => $this->first_name,
            'email' => $this->new_email,
            'password' => Hash::make($this->new_password),
        ];

        $user = User::create($credentials);
        if (AuthFacade::attempt([
            'email' => $this->new_email,
            'password' => $this->new_password,
        ])) {
            session()->flash('message', 'You have successfully logged in!');
        }

        session()->flash('error', 'Invalid credentials!');
    }
    public function toggleLoginForm()
    {
        $this->isLoginFormOpened = !$this->isLoginFormOpened;
    }
    public function closeLoginForm()
    {
        $this->isLoginFormOpened = false;
    }

    public function toggleRegisterForm()
    {
        $this->isRegisterFormOpened = !$this->isRegisterFormOpened;
    }
    public function closeRegisterForm()
    {
        $this->isRegisterFormOpened = false;
    }
}
