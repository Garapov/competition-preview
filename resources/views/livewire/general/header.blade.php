<header class="header">
    <div class="header__top">Instant Wins! 33% OFF Today only!</div>
    <div class="header__bottom">
        <div class="header__left">
            <a href="{{ route('welcome') }}" class="header__logo" wire:navigate>TOO MUCH</a>
            <nav class="header__menu">
                <ul>
                    <li><a href="#">Competitions</a></li>
                    <li><a href="#">Competitions</a></li>
                    <li><a href="#">Instant Win</a></li>
                    <li><a href="#">Instant Win</a></li>
                    <li><a href="#">wallet</a></li>
                </ul>
            </nav>
        </div>
        <div class="header__right">
            @livewire('general.payments')
            @livewire('general.auth')
        </div>
    </div>
</header>