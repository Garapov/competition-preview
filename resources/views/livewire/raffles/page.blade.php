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
        <div class="raffle_page__right"></div>
    </div>
</div>
