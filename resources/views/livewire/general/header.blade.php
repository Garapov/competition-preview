<header class="header">
    <div class="header__top">Instant Wins! 33% OFF Today only!</div>
    <div class="header__bottom">
        <div class="header__left">
            <a href="{{ route('welcome') }}" class="header__logo" wire:navigate>TOO MUCH</a>
            <nav class="header__menu">
                <ul>
                    <!-- TODO: сделать вывод меню из админки  -->
                    <li><a href="#" class="header__menu-link">Competitions</a></li>
                    <li><a href="{{ route('draws') }}" class="header__menu-link @if(Route::is('draws'))header__menu-link--active @endif" wire:navigate>draws</a></li>
                    <li><a href="#" class="header__menu-link">Instant Win</a></li>
                    <li><a href="#" class="header__menu-link">giveaway</a></li>
                    <li><a href="{{ route('draw-results') }}" class="header__menu-link @if(Route::is('draw-results'))header__menu-link--active @endif" wire:navigate>winners & draw results</a></li>
                    <li><a href="#" class="header__menu-link">how to play</a></li>
                </ul>
            </nav>
        </div>
        
        <div class="header__right">
            @livewire('general.payments')
            @livewire('general.header_auth')
            @livewire('general.favorites')
            @livewire('general.minicart')
        </div>
    </div>
</header>