<div class="header__minicart">
    <div class="header__minicart-opener" wire:click="toggleCart">
        <div class="icon">
            <img src="{{ asset('assets/images/minicart.svg') }}" alt="">
        </div>
        <div class="count" wire:poll.500ms>${{ Cart::getTotal() }}</div>
    </div>
    @if ($isOpened)
        <div class="header__minicart-body">
            <div class="header__minicart-products">
                {{-- {{ print_r($cart) }} --}}
                @forelse ($cart as $key=>$product)
                    <div class="header__minicart-product">
                        <div class="header__minicart-product_left">
                            <img src="{{ asset('storage/'. $product->attributes->image) }}" alt="">
                        </div>
                        <div class="header__minicart-product_right">
                            <div class="header__minicart-product_right-top">
                                <div class="name">{{ $product->name }}</div>
                                <div class="remover" wire:click="removeFromCart(`{{ $product->id }}`)">
                                    <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.25 3.75L14.75 14.25M4.25002 14.25L9.50002 9L14.75 3.75" stroke="#333333" stroke-width="1.5" stroke-linecap="round" />
                                    </svg>
                                </div>
                            </div>
                            <div class="header__minicart-product_right-bottom"></div>
                        </div>
                    </div>
                @empty
                    Your cart is empty
                @endforelse
            </div>
        </div>
    @endif
</div>