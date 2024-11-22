<div class="raffle_page">
    <div class="raffle_page__in raffle_page__container">
        <div class="raffle_page__left">
            <div class="raffle_page__slider" x-data="{
                glide: null,
                activeSlide: 0,
                init() {
                    if (document.querySelector('.raffle_page__gallery-glide--js')) {
                        this.glide = new glide_js('.raffle_page__gallery-glide--js', {
                            gap: 0,
                            autoplay: 3000
                        }).mount()
                        this.glide.on(['move.after'], () => {
                            this.activeSlide = this.glide.index;                    
                        })     
                    }
                },
                changeSlide(id) {
                    this.glide.go(`=${id}`);
                    this.activeSlide = this.glide.index;
                },
            }">
                <div class="raffle_page__thumbs">
                    <div class="raffle_page__thumb" @click="changeSlide(0)" :class="{'raffle_page__thumb--active': activeSlide == 0}">
                        <div class="raffle_page__thumb-in">
                            <img src="{{ asset('storage/'. $raffle->image) }}" alt="">
                        </div>
                    </div>
                    <div class="raffle_page__thumb" @click="changeSlide(1)" :class="{'raffle_page__thumb--active': activeSlide == 1}">
                        <div class="raffle_page__thumb-in">
                            <img src="https://place-hold.it/709x610" alt="">
                        </div>
                    </div>
                    <div class="raffle_page__thumb" @click="changeSlide(2)" :class="{'raffle_page__thumb--active': activeSlide == 2}">
                        <div class="raffle_page__thumb-in">
                            <img src="https://place-hold.it/709x610" alt="">
                        </div>
                    </div>
                    <div class="raffle_page__thumb" @click="changeSlide(3)" :class="{'raffle_page__thumb--active': activeSlide == 3}">
                        <div class="raffle_page__thumb-in">
                            <img src="https://place-hold.it/709x610" alt="">
                        </div>
                    </div>
                </div>
                <div class="raffle_page__gallery">
                    <div class="raffle_page__gallery-glide raffle_page__gallery-glide--js glide">
                        <div class="raffle_page__gallery-track glide__track" data-glide-el="track">
                            <div class="raffle_page__gallery-slides glide__slides">
                                <div class="raffle_page__gallery-slide glide__slide">
                                    <div class="raffle_page__gallery-slide-in">
                                        <img src="{{ asset('storage/'. $raffle->image) }}" alt="">
                                    </div>
                                </div>
                                <div class="raffle_page__gallery-slide glide__slide">
                                    <div class="raffle_page__gallery-slide-in">
                                        <img src="https://place-hold.it/709x610" alt="">
                                    </div>
                                </div>
                                <div class="raffle_page__gallery-slide glide__slide">
                                    <div class="raffle_page__gallery-slide-in">
                                        <img src="https://place-hold.it/709x610" alt="">
                                    </div>
                                </div>
                                <div class="raffle_page__gallery-slide glide__slide">
                                    <div class="raffle_page__gallery-slide-in">
                                        <img src="https://place-hold.it/709x610" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-glide-el="controls">
                            <div class="raffle_page__gallery-arrow raffle_page__gallery-arrow--prev" data-glide-dir="<">
                                <img src="{{ asset('assets/images/slider_arrow.svg') }}" alt="">
                            </div>
                            <div class="raffle_page__gallery-arrow raffle_page__gallery-arrow--next" data-glide-dir=">"><img src="{{ asset('assets/images/slider_arrow.svg') }}" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="raffle_page__accordion" x-data="{ open: null }">
                <div class="raffle_page__accordion-item" x-data="{ open: false }">
                    <div class="raffle_page__accordion-header" @click="open = !open">
                        <div class="raffle_page__accordion-header-title">Instant Wins</div>
                        <div class="raffle_page__accordion-header-icon" :class="{'isOpened': open}">
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                    <div class="raffle_page__accordion-content" x-show="open" x-transition>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo nam doloremque eaque ad! Voluptatum natus temporibus molestiae, unde libero a vero similique possimus iste architecto suscipit? Iste debitis quasi suscipit fugiat eveniet, repellat consectetur nihil, at a sit perspiciatis. Id magni veniam dolor nisi officiis, animi necessitatibus ratione numquam veritatis similique, ipsa laudantium dolorum voluptatibus ab tempore esse eaque sint beatae doloribus totam. Quam aspernatur minus, accusantium numquam obcaecati sequi molestias laboriosam, libero veritatis placeat commodi tempora nostrum porro quo assumenda iure doloremque? Sit impedit excepturi mollitia ratione! Quae quidem accusamus culpa explicabo quibusdam mollitia magnam consequatur excepturi quas delectus.
                    </div>
                </div>

                <div class="raffle_page__accordion-item" x-data="{ open: false }">
                    <div class="raffle_page__accordion-header" @click="open = !open">
                        <div class="raffle_page__accordion-header-title">Prize Description</div>
                        <div class="raffle_page__accordion-header-icon" :class="{'isOpened': open}">
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                    <div class="raffle_page__accordion-content" x-show="open" x-transition>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo nam doloremque eaque ad! Voluptatum natus temporibus molestiae, unde libero a vero similique possimus iste architecto suscipit? Iste debitis quasi suscipit fugiat eveniet, repellat consectetur nihil, at a sit perspiciatis. Id magni veniam dolor nisi officiis, animi necessitatibus ratione numquam veritatis similique, ipsa laudantium dolorum voluptatibus ab tempore esse eaque sint beatae doloribus totam. Quam aspernatur minus, accusantium numquam obcaecati sequi molestias laboriosam, libero veritatis placeat commodi tempora nostrum porro quo assumenda iure doloremque? Sit impedit excepturi mollitia ratione! Quae quidem accusamus culpa explicabo quibusdam mollitia magnam consequatur excepturi quas delectus.
                    </div>
                </div>
                
                <div class="raffle_page__accordion-item" x-data="{ open: false }">
                    <div class="raffle_page__accordion-header" @click="open = !open">
                        <div class="raffle_page__accordion-header-title">Rules</div>
                        <div class="raffle_page__accordion-header-icon" :class="{'isOpened': open}">
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                    <div class="raffle_page__accordion-content" x-show="open" x-transition>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo nam doloremque eaque ad! Voluptatum natus temporibus molestiae, unde libero a vero similique possimus iste architecto suscipit? Iste debitis quasi suscipit fugiat eveniet, repellat consectetur nihil, at a sit perspiciatis. Id magni veniam dolor nisi officiis, animi necessitatibus ratione numquam veritatis similique, ipsa laudantium dolorum voluptatibus ab tempore esse eaque sint beatae doloribus totam. Quam aspernatur minus, accusantium numquam obcaecati sequi molestias laboriosam, libero veritatis placeat commodi tempora nostrum porro quo assumenda iure doloremque? Sit impedit excepturi mollitia ratione! Quae quidem accusamus culpa explicabo quibusdam mollitia magnam consequatur excepturi quas delectus.
                    </div>
                </div>

                <div class="raffle_page__accordion-item" x-data="{ open: false }">
                    <div class="raffle_page__accordion-header" @click="open = !open">
                        <div class="raffle_page__accordion-header-title">FAQs</div>
                        <div class="raffle_page__accordion-header-icon" :class="{'isOpened': open}">
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                    <div class="raffle_page__accordion-content" x-show="open" x-transition>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo nam doloremque eaque ad! Voluptatum natus temporibus molestiae, unde libero a vero similique possimus iste architecto suscipit? Iste debitis quasi suscipit fugiat eveniet, repellat consectetur nihil, at a sit perspiciatis. Id magni veniam dolor nisi officiis, animi necessitatibus ratione numquam veritatis similique, ipsa laudantium dolorum voluptatibus ab tempore esse eaque sint beatae doloribus totam. Quam aspernatur minus, accusantium numquam obcaecati sequi molestias laboriosam, libero veritatis placeat commodi tempora nostrum porro quo assumenda iure doloremque? Sit impedit excepturi mollitia ratione! Quae quidem accusamus culpa explicabo quibusdam mollitia magnam consequatur excepturi quas delectus.
                    </div>
                </div>
                
            </div>
        </div>
        <div class="raffle_page__right" x-data="{
            count: 10,
            maxCount: {{$raffle->tickets_count}},
            rangeSlider: null,
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
                
            },
            destroy() {
                this.mounted = false;
            },
            plus() {
                this.count++;
                this.validateCount();
            },
            minus() {
                if (this.count > 1) this.count--;
                this.validateCount();
            },
            validateCount() {
                if (this.count < 1) this.count = 1;
                if (this.count > this.maxCount) this.count = this.maxCount;
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
            }

        }" >
            <div class="raffle_page__right-top">
                <div class="raffle_page__badges">
                    <div class="raffle_page__badge raffle_page__badge--yellow">DRAW TODAY</div>
                    <div class="raffle_page__badge raffle_page__badge--green">CASH ALTERNATIVE: £1000</div>
                </div>
                <h1 class="raffle_page__name">Iphone 15 Pro MaxIphone 15 Pro</h1>
            </div>
            <div class="raffle_page__right-middle">
                <div class="raffle_page__right-prices">
                    <div class="raffle_page__right-old_price">£20.99</div>
                    <div class="raffle_page__right-price">
                        <div class="price">£1.99</div>
                        <div class="text">Per entry</div>
                    </div>
                    <div class="raffle_page__end" x-show="remaining.total > 0">
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
                </div>
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
            </div>
            <div class="raffle_page__right-bottom">
                <div class="raffle_page__right-card">
                    <div class="general__modal_tabs">
                        <div class="general__modal_tab general__modal_tab--active">Online entry</div>
                        <div class="general__modal_tab">free postal entry</div>
                    </div>
                    <div class="raffle_page__right-count">
                        <div class="raffle_page__right-count-title">How many tickets?</div>
                        <div class="raffle_page__right-count-slider">
                            <input type="range" x-model="count" min="1" max="{{$raffle->tickets_count}}" id="slider1">
                        </div>
                    </div>
                    <div class="modal_amount__left">
                        <div class="modal_amount__button" @click="minus">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.33203 16H26.6654" stroke="#333333" stroke-width="1.5" stroke-linecap="round"></path>
                            </svg>
                        </div>
                        <div class="modal_amount__count">
                            <input type="number" min="1" max="{{$raffle->tickets_count}}" x-model="count" @change="validateCount">
                        </div>
                        <div class="modal_amount__button" @click="plus">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.33203 16H26.6654M15.9987 26.6667V16L15.9987 5.33337" stroke="#333333" stroke-width="1.5" stroke-linecap="round"></path>
                                </svg>
                        </div>
                    </div>
                    <div class="raffle_page__right-buy">
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
                        <div class="raffle_page__right-max">
                            <div class="item">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100%"  viewBox="0 0 25 24" fill="none">
                                        <path d="M2.5 8.44444C2.5 5.98985 4.48985 4 6.94444 4H18.0556C20.5102 4 22.5 5.98985 22.5 8.44444C22.5 8.98773 22.1884 9.48288 21.6986 9.71798L21.2113 9.95192C19.493 10.7767 19.493 13.2233 21.2113 14.0481L21.6986 14.282C22.1884 14.5171 22.5 15.0123 22.5 15.5556C22.5 18.0102 20.5102 20 18.0556 20H6.94444C4.48985 20 2.5 18.0102 2.5 15.5556C2.5 15.0123 2.81157 14.5171 3.30135 14.282L3.78872 14.0481C5.50702 13.2233 5.50702 10.7767 3.78872 9.95192L3.30135 9.71798C2.81157 9.48288 2.5 8.98773 2.5 8.44444Z" stroke="#2D264B" stroke-width="1.5"/>
                                        <path d="M14.5 4L14.5 20" stroke="#2D264B" stroke-width="1.5" stroke-linecap="round" stroke-dasharray="2 3"/>
                                    </svg>
                                </div>
                                <div class="text">
                                    Max entries per user: 5000
                                </div>
                            </div>
                            <div class="item">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100%"  viewBox="0 0 25 24" fill="none">
                                        <path d="M2.5 8.44444C2.5 5.98985 4.48985 4 6.94444 4H18.0556C20.5102 4 22.5 5.98985 22.5 8.44444C22.5 8.98773 22.1884 9.48288 21.6986 9.71798L21.2113 9.95192C19.493 10.7767 19.493 13.2233 21.2113 14.0481L21.6986 14.282C22.1884 14.5171 22.5 15.0123 22.5 15.5556C22.5 18.0102 20.5102 20 18.0556 20H6.94444C4.48985 20 2.5 18.0102 2.5 15.5556C2.5 15.0123 2.81157 14.5171 3.30135 14.282L3.78872 14.0481C5.50702 13.2233 5.50702 10.7767 3.78872 9.95192L3.30135 9.71798C2.81157 9.48288 2.5 8.98773 2.5 8.44444Z" stroke="#2D264B" stroke-width="1.5"/>
                                        <path d="M14.5 4L14.5 20" stroke="#2D264B" stroke-width="1.5" stroke-linecap="round" stroke-dasharray="2 3"/>
                                    </svg>
                                </div>
                                <div class="text">
                                    Max entries: 100000
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @livewire('raffles.similar')
</div>
