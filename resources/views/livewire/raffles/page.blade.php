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
            remaining: {
                days: 0,
                hours: 0,
                minutes: 0,
                seconds: 0
            },
            init() {
                this.calculateRemainingTime();
                this.mounted = true;
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
            }
        }" >
            <div class="raffle_page__right-top">
                <div x-text="remaining.seconds"></div>
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
                </div>
            </div>
        </div>
    </div>
</div>
