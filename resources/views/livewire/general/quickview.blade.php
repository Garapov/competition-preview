<div>
    @if ($isModalOpened)
        <div class="quickview">
            <div class="quickview__in" wire:click.outside="closeModal">
                <div class="quickview__modal_close" wire:click="closeModal">
                    <img src="https://competition-preview.test/assets/images/close.svg" alt="">
                </div>
                <div class="quickview__product" x-data="{
                    count: 10,
                    maxCount: {{$raffle->tickets_count}},
                    endDate: moment('{{$raffle->end}}'),
                    mounted: true,
                    raffle: {{ $raffle }},
                    remaining: {
                        days: 0,
                        hours: 0,
                        minutes: 0,
                        seconds: 0
                    },
                    init() {
                        this.calculateRemainingTime();
                        this.mounted = true;
                        this.raffle = {
                            ...this.raffle,
                            image: '{{ asset('storage/'.$raffle->image) }}'
                        }
                        console.log(this.raffle);
                        
                    },
                    calculateRemainingTime() {
        
                        if (!this.mounted) return;
        
                        let duration = moment.duration(this.endDate.diff(moment(new Date())));
        
                        this.remaining = {
                            days: duration.days(),
                            hours: duration.hours(),
                            minutes: duration.minutes(),
                            seconds: duration.seconds(),
                            total: duration._milliseconds
                        }
        
                        setTimeout(() => {
                            this.calculateRemainingTime();
                        }, 500);
                    },
                    addToCart() {        
                        $store.cart.addToCart({
                            raffle: JSON.parse(JSON.stringify(this.raffle)),
                            count: this.count
                        });
                        $wire.closeModal();
                    }
        
                }" >
                    <div class="quickview__image">
                        <div class="quickview__image_in">
                            <img src="{{ asset('storage/' . $raffle->image) }}" alt="">
                        </div>
                    </div>
                    <div class="quickview__info">
                        <div class="quickview__info-title">{{ $raffle->name }}</div>
                        <div class="raffle_card__solded">
                            <div class="raffle_card__solded-title">Sold</div>
                            <div class="raffle_card__solded-progress">
                                <div class="raffle_card__solded-progress-in" style="--width: 0%;"></div>
                            </div>
                            <div class="raffle_card__solded-percents">
                                <span>0%</span>
                                <span>/</span>
                                <span>1466</span>
                            </div>
                        </div>
                        <div class="quickview__end" x-show="remaining.total > 0">
                            <div class="raffle_page__end-block">
                                <div class="number" x-text="remaining.days < 10 ? `0${remaining.days}`: remaining.days"></div>
                                <div class="type">days</div>
                            </div>
                            <div class="raffle_page__end-dots">:</div>
                            <div class="raffle_page__end-block">
                                <div class="number" x-text="remaining.hours < 10 ? `0${remaining.hours}`: remaining.hours"></div>
                                <div class="type">hours</div>
                            </div>
                            <div class="raffle_page__end-dots">:</div>
                            <div class="raffle_page__end-block">
                                <div class="number" x-text="remaining.minutes < 10 ? `0${remaining.minutes}`: remaining.minutes"></div>
                                <div class="type">minutes</div>
                            </div>
                            <div class="raffle_page__end-dots">:</div>
                            <div class="raffle_page__end-block">
                                <div class="number" x-text="remaining.seconds < 10 ? `0${remaining.seconds}`: remaining.seconds"></div>
                                <div class="type">seconds</div>
                            </div>
                        </div>

                        <div class="quickview__bottom">
                            <div class="quickview__bottom-left">
                                <div class="quickview__bottom-prices">
                                    <template x-if="raffle.discount_price">
                                        <div class="quickview__bottom-prices-in">
                                            <div class="quickview__bottom-price-old" x-text="'£'+raffle.price"></div>
                                            <div class="quickview__bottom-price-current">
                                                <div class="quickview__bottom-price" x-text="'£'+raffle.discount_price"></div>
                                                <div class="quickview__bottom-price-enter">Per entry</div>
                                            </div>
                                        </div>
                                    </template>
                                    <template x-if="!raffle.discount_price">
                                        <div class="quickview__bottom-prices-in">
                                            <div class="quickview__bottom-price-current">
                                                <div class="quickview__bottom-price" x-text="'£'+raffle.price"></div>
                                            </div>
                                        </div>
                                    </template>
                                </div>
                            </div>
                            <div class="quickview__bottom-right">
                                <div class="raffle_page__right-buton" @click="addToCart">
                                    <div class="text">ENTER NOW</div>
                                    <div class="icon">
                                        <svg width="100%" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_3092_20218)">
                                                <path d="M17.5 6.5C17.5 6.46072 17.4996 6.42155 17.4987 6.38248C17.4362 3.67534 15.2222 1.5 12.5 1.5C9.79866 1.5 7.59765 3.64225 7.50318 6.32056C7.50108 6.38012 7.50002 6.43993 7.50002 6.5M17.5 6.5H7.50002M17.5 6.5H18.8087C20.8944 6.5 21.9373 6.5 22.5335 7.16616C23.1298 7.83231 23.0146 8.86879 22.7843 10.9417L22.4884 13.6043C22.0183 17.8356 21.7832 19.9513 20.3594 21.2256C18.9356 22.5 16.7904 22.5 12.5 22.5C8.20962 22.5 6.06443 22.5 4.64063 21.2256C3.21683 19.9513 2.98176 17.8356 2.51161 13.6043L2.21577 10.9417C1.98544 8.86879 1.87028 7.83231 2.46652 7.16616C3.06276 6.5 4.10561 6.5 6.1913 6.5H7.50002M6.50002 10.5L7.10002 11.1C10.0824 14.0823 14.9177 14.0823 17.9 11.1L18.5 10.5" stroke="white" stroke-width="2.5" stroke-linecap="round" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_3092_20218">
                                                <rect width="24" height="24" fill="white" transform="translate(0.5 0.5)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
