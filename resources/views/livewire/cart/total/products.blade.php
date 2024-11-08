<div class="cart_total">
    <div class="cart_total__in">
        <div class="cart_total__titles">
            <div class="cart_total__title cart_total__grid">
                <div class="cart_total__grid-item cart_total__title-item--image"></div>
                <div class="cart_total__grid-item cart_total__title-item cart_total__title-item--product">Product</div>
                <div class="cart_total__grid-item cart_total__title-item cart_total__title-item--price">price</div>
                <div class="cart_total__grid-item cart_total__title-item cart_total__title-item--quantity">quantity</div>
                <div class="cart_total__grid-item cart_total__title-item cart_total__title-item--subtotal">subtotal</div>
            </div>
        </div>
        <div class="cart_total__products">
            <template x-for="raffle in $store.cart.list.filter(item => item != null)" :key="raffle.id">
                <div class="cart_total__product cart_total__grid">
                    <div class="cart_total__grid-item cart_total__product_image">
                        <div class="cart_total__product_image-in">
                            <img :src="raffle.image" alt="" width="100%">
                        </div>
                    </div>
                    <div class="cart_total__grid-item cart_total__product_name" x-text="raffle.name" :title="raffle.name"></div>
                    <div class="cart_total__grid-item cart_total__product_price cart_total__product_price--text" x-text="'£' + raffle.price"></div>
                    <div class="cart_total__grid-item cart_total__product_count">
                        <div class="cart_total__product_count_button" @click="$store.cart.decrease(raffle.id)">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.33301 16H26.6663" stroke="#333333" stroke-width="1.5" stroke-linecap="round" />
                            </svg>
                        </div>
                        <span class="cart_total__product_count_text" x-text="raffle.count"></span>
                        <div class="cart_total__product_count_button" @click="$store.cart.increase(raffle.id)">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.33301 16H26.6663M15.9997 26.6667V16L15.9997 5.33337" stroke="#333333" stroke-width="1.5" stroke-linecap="round" />
                              </svg>
                        </div>
                    </div>
                    <div class="cart_total__grid-item cart_total__product_subtotal">
                        <div class="cart_total__product_price--text" x-text="'£' + raffle.price * raffle.count"></div>
                        <div class="cart_total__product_price_delete" @click="$store.cart.removeFromCart(raffle.id)">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.5959 1.599L18.3986 18.4017M1.59593 18.4017L9.99726 10.0003L18.3986 1.599" stroke="#333333" stroke-width="1.5" stroke-linecap="round" />
                            </svg>
                        </div>
                    </div>
                </div>
            </template>
        </div>
    </div>
</div>
