<div class="header__minicart" x-data="{ isOpened: false, }">
    <div class="header__minicart-opener" @click="isOpened = !isOpened">
        <div class="icon">
            <img src="{{ asset('assets/images/minicart.svg') }}" alt="">
        </div>
        <div class="count" x-text="$store.cart.list.filter(item => item != null).length"></div>
    </div>
    
    <div class="header__minicart-body" x-show="isOpened" @click.outside="isOpened = false">
        <div class="header__minicart-products">
            {{-- {{ print_r($cart) }} --}}
            <template x-for="raffle in $store.cart.list.filter(item => item != null)" :key="raffle.id">
                <div class="header__minicart-product">
                    <div class="header__minicart-product_left">
                        <img :src="raffle.image" alt="">
                    </div>
                    <div class="header__minicart-product_right">
                        <div class="header__minicart-product_right-top">
                            <div class="name" x-text="raffle.name"></div>
                            <div class="count" x-text="raffle.count"></div>
                            <div class="remover" @click="$store.cart.removeFromCart(raffle.id)">
                                <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.25 3.75L14.75 14.25M4.25002 14.25L9.50002 9L14.75 3.75" stroke="#333333" stroke-width="1.5" stroke-linecap="round" />
                                </svg>
                            </div>
                        </div>
                        <div class="header__minicart-product_right-bottom"></div>
                    </div>
                </div>
            </template>


            <a href="{{ route('cart') }}" wire:navigate>View Cart</a>
        </div>
    </div>
</div>