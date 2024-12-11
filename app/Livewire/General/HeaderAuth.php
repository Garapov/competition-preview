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

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required',
        'new_email' => 'required|unique:users,email',
        'new_password' => 'required|min:6',
        'first_name' => 'required',
        'last_name' => 'nullable',
        'born' => 'nullable|date'
    ];

    public function mount()
    {
        if (AuthFacade::check()) {
            $this->isLoginFormOpened = false;
            $this->isRegisterFormOpened = false;
        }
    }

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

        if (AuthFacade::attempt(['email' => $this->email, 'password' => $this->password])) {
            $this->reset(['email', 'password']);
            $this->closeLoginForm();
            $this->dispatch('auth-status-changed');
            return;
        }

        session()->flash('error', 'Invalid credentials!');
    }

    public function register()
    {
        $this->validate();

        $user = User::create([
            'name' => $this->first_name,
            'email' => $this->new_email,
            'password' => Hash::make($this->new_password),
        ]);

        AuthFacade::login($user);
        $this->reset(['new_email', 'new_password', 'first_name', 'last_name', 'born']);
        $this->closeRegisterForm();
        $this->dispatch('auth-status-changed');
    }

    public function toggleLoginForm()
    {
        $this->isLoginFormOpened = !$this->isLoginFormOpened;
        if ($this->isLoginFormOpened) {
            $this->isRegisterFormOpened = false;
        }
    }

    public function closeLoginForm()
    {
        $this->isLoginFormOpened = false;
    }

    public function toggleRegisterForm()
    {
        $this->isRegisterFormOpened = !$this->isRegisterFormOpened;
        if ($this->isRegisterFormOpened) {
            $this->isLoginFormOpened = false;
        }
    }

    public function closeRegisterForm()
    {
        $this->isRegisterFormOpened = false;
    }
}
