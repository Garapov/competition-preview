<div class="raffle_page__similar glide" x-data="{
    slider: new window.glide_js($refs.similar, {
        perView: 4,
        bound: true,
        rewind: false,
        gap: 22
    }),
    init() {
        this.slider.mount()
    }
}" x-ref="similar">
    <div class="raffle_page__similar-top raffle_page__similar-container">
        <div class="raffle_page__similar-title">Similar Draws</div>
        <div class="raffle_page__arrows" data-glide-el="controls">
            <div class="raffle_page__arrow raffle_page__arrow--prev" data-glide-dir="<">
                <svg width="12" height="25" viewBox="0 0 12 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.3333 23.5417L6.51355 19.683C3.46736 16.6058 1.94426 15.0672 1.70974 13.1919C1.65228 12.7325 1.65228 12.2675 1.70974 11.8081C1.94426 9.93276 3.46736 8.39416 6.51355 5.31698L10.3333 1.45834" stroke-width="1.5" stroke-linecap="round" />
                </svg>
            </div>
            <div class="raffle_page__arrow raffle_page__arrow--next" data-glide-dir=">">
                <svg width="12" height="25" viewBox="0 0 12 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.3333 23.5417L6.51355 19.683C3.46736 16.6058 1.94426 15.0672 1.70974 13.1919C1.65228 12.7325 1.65228 12.2675 1.70974 11.8081C1.94426 9.93276 3.46736 8.39416 6.51355 5.31698L10.3333 1.45834" stroke-width="1.5" stroke-linecap="round" />
                </svg>
            </div>
        </div>
    </div>
    <div class="raffle_page__similar-bottom raffle_page__similar-container">
        <div class="raffle_page__similar-slider">
            <div class="glide__track" data-glide-el="track">
                <div class="glide__slides">

                    @foreach ($raffles as $raffle)
                        @livewire('general.card', [
                            'class' => 'glide__slide main_categories__product raffle_page__similar-product',
                            'image' => asset('storage/' . $raffle->image),
                            'name' => $raffle->name,
                            'end' => $raffle->end,
                            'price' => $raffle->price,
                            'discount_price' => $raffle->discount_price,
                            'tickets' => $raffle->tickets,
                            'id' => $raffle->id
                        ], key($raffle->id))
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>