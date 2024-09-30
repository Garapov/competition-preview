<div class="main_categories__category">
    <div class="general__title main_categories__title">{{ $category->title }}</div>
    <div class="general__subtitle main_categories__subtitle">{{ $category->subtitle }}</div>
    <div class="main_categories__products">
        @forelse ($category->raffles as $raffle)
            @livewire('general.card', [
                'class' => 'main_categories__product',
                'image' => asset($raffle->image),
                'name' => $raffle->name,
                'end' => $raffle->end,
                'price' => $raffle->price,
                'discount_price' => $raffle->discount_price,
                'tickets' => $raffle->tickets
            ], key($raffle->id))      
        @empty
            no products in this category
        @endforelse
    </div>
</div>