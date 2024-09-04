<div class="header__auth">
    @if (!auth()->user())
    <div class="header__auth-block header__auth-login">
        @livewire('general.button', [
        'link' => route('login'),
        'text' => 'Log in',
        'icon' => asset('assets/images/user.svg')
        ])
        <form wire:submit.prevent="login" class="header__auth-popup">
            <div class="header__auth-title">Log in</div>
            <div class="header__auth-form">
                <input class="header__auth-input" type="text" placeholder="Email" wire:model="email">
                <input class="header__auth-input" type="password" placeholder="Password" wire:model="password">
            </div>
            <div class="header__auth-row">
                <label class="general__checkbox">
                    <input type="checkbox">
                    <div class="text">Remember me</div>
                </label>
                <a href="#" class="header__auth-link">Forgot Password?</a>
            </div>
            <button type="submit" class="header__auth-button">login</button>
            <label class="general__checkbox">
                <input type="checkbox">
                <div class="text">I agree that I am 18 years or older, and I agree to the Privacy Policy</div>
            </label>
        </form>
    </div>
    <div class="header__auth-block header__auth-register">
        @livewire('general.button', [
        'link' => route('register'),
        'text' => 'Sign up',
        'icon' => null,
        'type' => 'dark',
        ])
    </div>
    @else
    @livewire('general.user')
    @livewire('general.wallet')
    @endif
</div>