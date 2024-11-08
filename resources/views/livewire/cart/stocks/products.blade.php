<div class="cart_stocks">
    <div class="cart_stocks__in">
        <div class="cart_stocks__title">{{ $title }}</div>
        <div class="cart_stocks__items">
            @foreach ($products as $key => $product)
                @if ($key > 2)
                    @continue
                @endif
                @livewire('cart.stocks.components.item', [
                    'product' => $product,
                    'title' => $card_title,
                    'icon' => $icon,
                    'badge' => $badge
                ])
            @endforeach
        </div>
    </div>
</div>