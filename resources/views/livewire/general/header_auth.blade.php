<div class="header__auth" wire:poll>
    @if (!$user)
    <div class="header__auth-block header__auth-login">
        <div class="general__button general__button--regular" wire:click="toggleLoginForm">
            <span class="general__button-icon">
                <img src="{{ asset('assets/images/user.svg') }}" alt="">
            </span>
            <span class="general__button-text">
                Log in
            </span>
        </div>
        @if ($isLoginFormOpened)
        <form wire:submit.prevent="login" class="header__auth-popup" wire:transition wire:click.outside="closeLoginForm">
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
        @endif
    </div>
    <div class="header__auth-block header__auth-register">
        <div class="general__button general__button--dark" wire:click="toggleRegisterForm">
            <span class="general__button-text">
                Sign up
            </span>
        </div>
        @if ($isRegisterFormOpened)
        <form wire:submit.prevent="register" class="header__auth-popup" wire:transition wire:click.outside="closeLoginForm">
            <div class="header__auth-title">Register</div>
            <div class="header__auth-form">
                <input class="header__auth-input" type="text" placeholder="First name *" wire:model="first_name">
                <input class="header__auth-input" type="text" placeholder="Last name *" wire:model="last_name">
                <input class="header__auth-input" type="text" placeholder="DD-MM-YYYY *" wire:model="born">
                <input class="header__auth-input" type="text" placeholder="Email" wire:model="new_email">
                <input class="header__auth-input" type="password" placeholder="Password" wire:model="new_password">
            </div>
            <div class="header__auth-row">
                <label class="general__checkbox">
                    <input type="checkbox">
                    <div class="text">Remember me</div>
                </label>
            </div>
            <button type="submit" class="header__auth-button">Register</button>
            <label class="general__checkbox">
                <input type="checkbox">
                <div class="text">I agree that I am 18 years or older, and I agree to the Privacy Policy</div>
            </label>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </form>
        @endif
    </div>
    @else
    @livewire('general.user')
    @livewire('general.wallet')
    @endif
</div>