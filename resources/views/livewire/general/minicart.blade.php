<div class="header__minicart" x-data="{ isOpened: false, cart: $persist([]), }">
    <div class="header__minicart-opener" @click="isOpened = !isOpened">
        <div class="icon">
            <img src="{{ asset('assets/images/minicart.svg') }}" alt="">
        </div>
        <div class="count">0</div>
    </div>
    
    <div class="header__minicart-body" x-show="isOpened">
        <div class="header__minicart-products">
            {{-- {{ print_r($cart) }} --}}
            <template x-for="product in cart.filter(item => item != null)" :key="product.id">
                <div class="header__minicart-product">
                    <div class="header__minicart-product_left">
                        <img :src="product.image" alt="">
                    </div>
                    <div class="header__minicart-product_right">
                        <div class="header__minicart-product_right-top">
                            <div class="name" x-text="product.name"></div>
                            <div class="count" x-text="product.count"></div>
                            <div class="remover">
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