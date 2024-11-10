<div class="checkout_page__right-products-items">
    <template x-for="raffle in $store.cart.list.filter(item => item != null)" :key="raffle.id">
        <div class="checkout_page__right-product checkout_page__right-products--grid">
            <div class="checkout_page__right-product-info">
                <div class="checkout_page__right-product-image">
                    <div class="checkout_page__right-product-image-in">
                        <img :src="raffle.image" alt="" width="100%">
                        <div class="checkout_page__right-product-remove" @click="$store.cart.removeFromCart(raffle.id)">
                            <svg width="100%" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect y="0.5" width="20" height="20" rx="10" fill="black" />
                                <path d="M5.99805 6.49951L13.9993 14.5008M5.99806 14.5008L9.99869 10.5001L13.9993 6.49951" stroke="white" stroke-width="1.5" stroke-linecap="round" />
                            </svg>
                        </div>
                    </div>
                    
                </div>
                <div class="checkout_page__right-product-name" x-text="raffle.name" :title="raffle.name"></div>
            </div>

            <div class="checkout_page__right-product-count">
                <div class="checkout_page__right-product-count_button" @click="$store.cart.decrease(raffle.id)">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.33301 16H26.6663" stroke="#333333" stroke-width="1.5" stroke-linecap="round" />
                    </svg>
                </div>
                <span class="checkout_page__right-product-count_text" x-text="raffle.count"></span>
                <div class="checkout_page__right-product-count_button" @click="$store.cart.increase(raffle.id)">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.33301 16H26.6663M15.9997 26.6667V16L15.9997 5.33337" stroke="#333333" stroke-width="1.5" stroke-linecap="round" />
                      </svg>
                </div>
            </div>
            <div class="checkout_page__right-product-subtotal" x-text="'£' + (raffle.price * raffle.count).toFixed(2)"></div>
        </div>
    </template>
</div>