<div class="raffle_card {{ $class }}" wire:poll.100ms>
    <div class="raffle_card__image">
        <img src="{{ $image }}" alt="">
    </div>
    <div class="raffle_card__name">{{ $name }}</div>
    @php
        $endDate = Carbon\Carbon::parse($end);
        $seconds = floor($endDate->diffInSeconds(Carbon\Carbon::now()) * -1);

        $dates = floor($seconds / 3600 / 24) ;
        $hours = floor(($seconds / 3600) - ($dates * 24));
        $minutes = floor($seconds / 60) - ($dates * 24 * 60) - ($hours * 60);
        $endSeconds =  $seconds - (($dates * 24 * 60 * 60) + ($hours * 60 * 60) + ($minutes * 60));
        // $seconds = floor($endDate->diffInSeconds(Carbon\Carbon::now()) - ($dates * 24 * 60 * 60) - ($hours * 60 * 60) - ($minutes * 60));
    @endphp

    <div class="raffle_card__row">
    <div class="raffle_card__icon raffle_card__icon--placeholder"></div>
        @if ($seconds > 0)
            <div class="raffle_card__end" >
                <div class="raffle_card__end-block">
                    <div class="number">
                        @if ($dates < 10)
                            0{{ $dates }}
                        @else
                            {{ $dates }}
                        @endif
                        
                    </div>
                    <div class="type">days</div>
                </div>
                <div class="raffle_card__end-dots">:</div>
                <div class="raffle_card__end-block">
                    <div class="number">
                        @if ($hours < 10)
                            0{{ $hours }}
                        @else
                            {{ $hours }}
                        @endif
                    </div>
                    <div class="type">hours</div>
                </div>
                <div class="raffle_card__end-dots">:</div>
                <div class="raffle_card__end-block">
                    <div class="number">
                        @if ($minutes < 10)
                            0{{ $minutes }}
                        @else
                            {{ $minutes }}
                        @endif
                    </div>
                    <div class="type">minutes</div>
                </div>
                <div class="raffle_card__end-dots">:</div>
                <div class="raffle_card__end-block">
                    <div class="number">
                        @if ($endSeconds < 10)
                            0{{ $endSeconds }}
                        @else
                            {{ $endSeconds }}
                        @endif
                    </div>
                    <div class="type">seconds</div>
                </div>
            </div>
        @else
            <div class="raffle_card__end raffle_card__end--ended">
                Ended {{ $endDate->diffForHumans() }}
            </div>
        @endif

        <div class="raffle_card__icon">
            <svg width="100%" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="52" height="52" rx="10" fill="#F0E5FF" />
                <path d="M33 22.7767C32.7932 22.1061 32.4228 21.476 31.8547 20.9128C31.4075 20.4694 30.9433 20.177 30.4776 20M24.3993 18.1459C22.7257 17.0843 20.0227 16.0803 17.6885 18.4607C12.1475 24.1114 21.6498 35 26 35C30.3501 35 39.8525 24.1114 34.3115 18.4607C31.9773 16.0803 29.2744 17.0843 27.6007 18.1459C26.655 18.7458 25.345 18.7458 24.3993 18.1459Z" stroke="#333333" stroke-width="1.5" stroke-linecap="round" />
            </svg>
        </div>
    </div>

    @if ($tickets)
        @php
           $sold_tickets_count = count($tickets->where('sold', true));
        @endphp
        <div class="raffle_card__solded">
            <div class="raffle_card__solded-title">Sold</div>
            <div class="raffle_card__solded-progress">
                <div class="raffle_card__solded-progress-in" style="--width: {{ $sold_tickets_count * 100 / count($tickets) }}%;"></div>
            </div>
            <div class="raffle_card__solded-percents">
                <span>{{ $sold_tickets_count * 100 / count($tickets) }}%</span>
                <span>/</span>
                <span>{{ count($tickets) }}</span>
            </div>
        </div>
    @endif
    
    @if ($seconds > 0)
    <div class="raffle_card__bottom">
        <div class="raffle_card__bottom-left">
            @if ($discount_price)
                <div class="raffle_card__oldprice">
                    <div class="left">£{{ $price }}</div>
                    <div class="right">EARLY BIRD</div>
                </div>
            @endif
            <div class="raffle_card__price">
                @if ($discount_price)
                    <div class="left">£{{ $discount_price }}</div>
                @else
                    <div class="left">£{{ $price }}</div>
                @endif
                <div class="right">Per entry</div>
            </div>
        </div>
        <div class="raffle_card__bottom-right">
            <button class="raffle_card__enter_button" wire:click="openModal">
                <span class="text">ENTER NOW</span>
                <span class="icon">
                    <svg width="100%" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_3023_481)">
                          <path d="M17.0003 6.5C17.0003 6.46072 16.9998 6.42155 16.9989 6.38248C16.9365 3.67534 14.7224 1.5 12.0003 1.5C9.29891 1.5 7.0979 3.64225 7.00343 6.32056C7.00132 6.38012 7.00027 6.43993 7.00027 6.5M17.0003 6.5H7.00027M17.0003 6.5H18.309C20.3947 6.5 21.4375 6.5 22.0338 7.16616C22.63 7.83231 22.5148 8.86879 22.2845 10.9417L21.9887 13.6043C21.5185 17.8356 21.2835 19.9513 19.8597 21.2256C18.4359 22.5 16.2907 22.5 12.0003 22.5C7.70987 22.5 5.56467 22.5 4.14087 21.2256C2.71707 19.9513 2.482 17.8356 2.01186 13.6043L1.71601 10.9417C1.48569 8.86879 1.37052 7.83231 1.96676 7.16616C2.563 6.5 3.60585 6.5 5.69155 6.5H7.00027M6.00027 10.5L6.60027 11.1C9.5826 14.0823 14.4179 14.0823 17.4003 11.1L18.0003 10.5" stroke="white" stroke-width="2" stroke-linecap="round" />
                        </g>
                        <defs>
                          <clipPath id="clip0_3023_481">
                            <rect width="24" height="24" fill="white" transform="translate(0 0.5)" />
                          </clipPath>
                        </defs>
                      </svg>
                </span>
            </button>
        </div>
    </div>
    @endif

    {{ session()->get('modalProductId') }}
        {{-- @livewire('general.cart-modal') --}}
</div>
