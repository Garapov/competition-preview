<x-guest-layout>
    <x-slot:pagetitle class="font-bold">
        basket
    </x-slot>
    <div class="cart_page">
        <div class="cart_page__in">
            <div class="cart_page__top">
                <div class="cart_page__left">
                    @livewire('cart.total.products')
                </div>
                <div class="cart_page__right">
                    @livewire('cart.total.summary')
                    <div class="cart_page__right-temp">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 500 132" fill="none">
                            <rect width="500" height="132" rx="20" fill="#FF0000"/>
                        </svg>
                    </div>
                    <div class="cart_page__right-temp">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 500 132" fill="none">
                            <rect width="500" height="132" rx="20" fill="#FF0000"/>
                        </svg>
                    </div>
                </div>
            </div>

            @livewire('cart.stocks.products', [
                'badge' => 'best price',
                'title' => 'best price 23',
                'card_title' => 'Complete your set with these',
                'icon' => asset('assets/images/thumb_up.png'),
                'products' => \App\Models\Raffle::orderBy('price', 'asc')->get()
            ])
            @livewire('cart.stocks.products', [
                'badge' => 'Ending Soon',
                'title' => 'Ending Soon',
                'card_title' => 'Join upcoming draw',
                'icon' => asset('assets/images/24_hours.svg'),
                'products' => \App\Models\Raffle::orderBy('price', 'desc')->get()
                
            ])
            <!-- TODO: Сделать вывод товаров которые заакончатся в течение 24 часов -->
        </div>
    </div>
</x-guest-layout>