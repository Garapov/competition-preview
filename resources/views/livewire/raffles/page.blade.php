<div class="raffle_page">
    <div class="raffle_page__in raffle_page__container">
        <div class="raffle_page__left">
            <div class="raffle_page__slider" x-data="slider">
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
        <div class="raffle_page__right" x-data="raffle_page" x-init="init({{$raffle->tickets_count}})">
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

                    @php
                        $endDate = Carbon\Carbon::parse($raffle->end);
                        $seconds = floor($endDate->diffInSeconds(Carbon\Carbon::now()) * -1);

                        $dates = floor($seconds / 3600 / 24) ;
                        $hours = floor(($seconds / 3600) - ($dates * 24));
                        $minutes = floor($seconds / 60) - ($dates * 24 * 60) - ($hours * 60);
                        $endSeconds =  $seconds - (($dates * 24 * 60 * 60) + ($hours * 60 * 60) + ($minutes * 60));
                        // $seconds = floor($endDate->diffInSeconds(Carbon\Carbon::now()) - ($dates * 24 * 60 * 60) - ($hours * 60 * 60) - ($minutes * 60));
                    @endphp
                    <div class="raffle_page__end">
                        <div class="raffle_page__end-block">
                            <div class="number">
                                @if ($dates < 10 && $dates > 0)
                                    0{{ $dates }}
                                @else
                                    {{ $dates }}
                                @endif
                                
                            </div>
                            <div class="type">days</div>
                        </div>
                        <div class="raffle_page__end-dots">:</div>
                        <div class="raffle_page__end-block">
                            <div class="number">
                                @if ($hours < 10 && $hours > 0)
                                    0{{ $hours }}
                                @else
                                    {{ $hours }}
                                @endif
                            </div>
                            <div class="type">hours</div>
                        </div>
                        <div class="raffle_page__end-dots">:</div>
                        <div class="raffle_page__end-block">
                            <div class="number">
                                @if ($minutes < 10 && $minutes > 0)
                                    0{{ $minutes }}
                                @else
                                    {{ $minutes }}
                                @endif
                            </div>
                            <div class="type">minutes</div>
                        </div>
                        <div class="raffle_page__end-dots">:</div>
                        <div class="raffle_page__end-block">
                            <div class="number">
                                @if ($endSeconds < 10 && $endSeconds > 0)
                                    0{{ $endSeconds }}
                                @else
                                    {{ $endSeconds }}
                                @endif
                            </div>
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
    </div>65 5
</div>
