<div class="header__auth">
    @livewire('general.button', [
        'link' => route('login'),
        'text' => 'Log in',
        'icon' => asset('assets/images/user.svg')
    ])

    @livewire('general.button', [
        'link' => route('register'),
        'text' => 'Sign up',
        'icon' => null,
        'type' => 'dark',
    ])
</div>
