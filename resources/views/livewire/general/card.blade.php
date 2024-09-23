<div class="raffle_card {{ $class }}">
    <div class="raffle_card__image">
        <img src="{{ $image }}" alt="">
    </div>
    <div class="raffle_card__name">{{ $name }}</div>
    @php
        $endDate = Carbon\Carbon::parse($end);
        $dates = $endDate->format('d') - Carbon\Carbon::now()->dayOfMonth();
        $hours = $endDate->format('h');
    @endphp
    <div class="raffle_card__end">
        <div class="raffle_card__end-block">
            <div class="number">{{ $dates }}</div>
            <div class="type">days</div>
        </div>
        <div class="raffle_card__end-block">
            <div class="number">{{ $hours }}</div>
            <div class="type">hours</div>
        </div>
    </div>
</div>
