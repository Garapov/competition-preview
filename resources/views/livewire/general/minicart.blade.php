<div class="header__minicart" x-data="{ isOpened: false, }">
    <div class="header__minicart-opener" @click="isOpened = !isOpened">
        <div class="icon">
            <img src="{{ asset('assets/images/minicart.svg') }}" alt="">
        </div>
        <div class="count" x-text="$store.cart.list.filter(item => item != null).length"></div>
    </div>

    <div class="header__minicart-body" x-show="isOpened" @click.outside="isOpened = false">
        <template x-if="$store.cart.list.filter(item => item != null).length > 0">
            <div class="header__minicart-products">
                {{-- {{ print_r($cart) }} --}}
                <template x-for="raffle in $store.cart.list.filter(item => item != null)" :key="raffle.id">
                    <div class="header__minicart-product">
                        <div class="header__minicart-product_left">
                            <img :src="raffle.image" alt="">
                        </div>
                        <div class="header__minicart-product_right">
                            <div class="header__minicart-product_right-top">
                                <div class="header__minicart-product-name" x-text="raffle.name"></div>
                                {{-- <div class="count" x-text="raffle.count"></div> --}}
                                <div class="header__minicart-product-remover"
                                    @click="$store.cart.removeFromCart(raffle.id)">
                                    <svg width="19" height="18" viewBox="0 0 19 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.25 3.75L14.75 14.25M4.25002 14.25L9.50002 9L14.75 3.75" stroke="#333333"
                                            stroke-width="1.5" stroke-linecap="round" />
                                    </svg>
                                </div>
                            </div>
                            <div class="header__minicart-product_right-bottom">
                                <div class="header__minicart-product_count">
                                    <div class="header__minicart-product_count_button"
                                        @click="$store.cart.decrease(raffle.id)">
                                        <svg width="20" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.33301 16H26.6663" stroke="#333333" stroke-width="1.5"
                                                stroke-linecap="round" />
                                        </svg>
                                    </div>
                                    <span class="header__minicart-product_count_text" x-text="raffle.count"></span>
                                    <div class="header__minicart-product_count_button"
                                        @click="$store.cart.increase(raffle.id)">
                                        <svg width="20" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.33301 16H26.6663M15.9997 26.6667V16L15.9997 5.33337"
                                                stroke="#333333" stroke-width="1.5" stroke-linecap="round" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="header__minicart-product_right_price"
                                    x-text="'£' + (raffle.price * raffle.count).toFixed(2)"></div>
                            </div>
                        </div>
                    </div>
                </template>

                <div class="header__minicart-products-delim"></div>
            </div>
        </template>
        <div class="header__minicart-tabs" x-data="{
            count: {{ floor($product_best->tickets_count * 1 / 100) }},
            tab: 'best',
            changeTab(tab) {
                this.tab = tab;
            },
            setCount(count) {
                this.count = count;
            },
            addToCart(product) {
                $store.cart.addToCart({
                    raffle: product,
                    count: count
                })
            }
        }">
            <div class="header__minicart-products-tabs">
                <div class="header__minicart-products-tab" :class="{'header__minicart-products-tab--active': tab == 'best'}"
                    @click="changeTab('best')">best price</div>
                <div class="header__minicart-products-tab" :class="{'header__minicart-products-tab--active': tab == 'soon'}"
                    @click="changeTab('soon')">Ending Soon</div>
            </div>
            <template x-if="tab == 'best'">
                <div>
                    @livewire('cart.stocks.components.item', [
                        'product' => $product_best,
                        'title' => 'Complete your set with these',
                        'icon' => asset('assets/images/thumb_up.png'),
                        'badge' => 'best price'
                    ])
                </div>
            </template>
            <template x-if="tab == 'soon'">
                <div>
                    @livewire('cart.stocks.components.item', [
                        'product' => $product_soon,
                        'title' => 'Complete your set with these',
                        'icon' => asset('assets/images/thumb_up.png'),
                        'badge' => 'Ending Soon'
                    ])
                </div>
            </template>
        </div>
        <template x-if="$store.cart.list.filter(item => item != null).length > 0">
            <div class="header__minicart-summary">
                <div class="header__minicart-summary-title">summary</div>
                <div class="header__minicart-summary-total">
                    <div class="text">total:</div>
                    <div class="cost" x-text="'£' + $store.cart.getTotalPrice()"></div>
                </div>
                <a class="header__minicart-summary-button" href="{{ route('cart') }}" wire:navigate>Proceed to checkout</a>
            </div>
        </template>
    </div>
</div>
