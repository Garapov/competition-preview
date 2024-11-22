<div class="cart_stocks__item" x-data="{
        count: {{ floor($product->tickets_count * 1 / 100) }},

        setCount(count) {
            this.count = count;
        }
    }">
    <div class="cart_stocks__item-badge">
        <div class="cart_stocks__item-badge_in">
            {{ $badge }}
        </div>
        <div class="cart_stocks__item-badge-triangle"></div>
    </div>
    <div class="cart_stocks__item-top">
        <div class="icon">
            <img src="{{ $icon }}" alt="">
        </div>
        <div class="text">
            {{ $title }}
        </div>
    </div>
    <div class="cart_stocks__item-middle">
        <div class="cart_stocks__item-count">
            <div class="cart_stocks__item-count-line"></div>
            <div></div>
            <div class="cart_stocks__item-wrap">
                <div class="cart_stocks__item-count-tick" :class="{'cart_stocks__item-count-tick--active': count == {{ floor($product->tickets_count * 1 / 100) }}}" @click="setCount({{ floor($product->tickets_count * 1 / 100) }})">
                    <div class="count">{{ floor($product->tickets_count * 1 / 100) }}</div>
                </div>
            </div>
            <div class="cart_stocks__item-wrap">
                <div class="cart_stocks__item-count-tick" :class="{'cart_stocks__item-count-tick--active': count == {{ floor($product->tickets_count * 10 / 100) }}}" @click="setCount({{ floor($product->tickets_count * 10 / 100) }})">
                    <div class="count">{{ floor($product->tickets_count * 10 / 100) }}</div>
                </div>
            </div>
            <div class="cart_stocks__item-wrap">
                <div class="cart_stocks__item-count-tick" :class="{'cart_stocks__item-count-tick--active': count == {{ floor($product->tickets_count * 20 / 100) }}}" @click="setCount({{ floor($product->tickets_count * 20 / 100) }})">
                    <div class="count">{{ floor($product->tickets_count * 20 / 100) }}</div>
                </div>
            </div>
            <div class="cart_stocks__item-wrap">
                <div class="cart_stocks__item-count-tick" :class="{'cart_stocks__item-count-tick--active': count == {{ floor($product->tickets_count * 50 / 100) }}}" @click="setCount({{ floor($product->tickets_count * 50 / 100) }})">
                    <div class="count">{{ floor($product->tickets_count * 50 / 100) }}</div>
                </div>
            </div>
            <div class="cart_stocks__item-wrap">
                <div class="cart_stocks__item-count-tick" :class="{'cart_stocks__item-count-tick--active': count == {{ $product->tickets_count }}}" @click="setCount({{ $product->tickets_count }})">
                    <div class="count">{{ $product->tickets_count }}</div>
                </div>
            </div>

            <div class="cart_stocks__item-count-counts">
                <div class="text">0</div>
                <div class="text">{{ $product->tickets_count }}</div>
            </div>
        </div>
    </div>
    <div class="cart_stocks__item-bottom">
        <div class="cart_stocks__product">
            <div class="cart_stocks__product-image">
                <div class="cart_stocks__product-image-in">
                    <img src="{{ asset('storage/'.$product->image) }}" alt="">
                </div>
            </div>
            <div class="cart_stocks__product-data">
                <div class="cart_stocks__product-name">{{ $product->name }}</div>
                <div class="cart_stocks__product-buttons">
                    <div class="left">
                        @if ($product->oldprice)
                            <div class="price">£{{ $product->oldprice }}</div>
                        @else
                            <div class="price">£{{ $product->price }}</div>
                        @endif
                        <div class="text">Per entry</div>
                    </div>
                    <div class="button" @click="$store.cart.addToCart({
                        raffle: {{$product}},
                        count: count
                    })">
                        add to basket
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>