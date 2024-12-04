<x-guest-layout>
    <x-slot:pagetitle class="font-bold">
        Winners
    </x-slot>
    <div class="draws_page" x-data="{
        months: window.moment.months() 
    }">
        <div class="draws_page__container">
            <div class="draws_page__top">
                <div class="draws_page__info">
                    <div class="draws_page__info_item">
                        <div class="icon">
                            <img src="{{ asset('assets/images/cup.svg') }}" alt="">
                        </div>
                        <div class="text">1M Winners</div>
                    </div>
                    <div class="draws_page__info_item">
                        <div class="icon">
                            <img src="{{ asset('assets/images/draw_wallet.svg') }}" alt="">
                        </div>
                        <div class="text">£70M IN PRIZES WON</div>
                    </div>
                </div>
                <div class="draws_page__dates">
                    <div class="draws_page__years">
                        <div class="draws_page__year" :class="{'draws_page__year--disabled': window.moment().year() > 2023}">2023</div>
                        <div class="draws_page__year" :class="{'draws_page__year--disabled': window.moment().year() > 2024}">2024</div>
                    </div>
                    <div class="draws_page__months">
                        <template x-for="month in months" x-key="month">
                            <div class="draws_page__month" :class="{'draws_page__month--active': window.moment().month(window.moment().month()).format('M') == window.moment().month(month).format('M'), 'draws_page__month--disabled': +window.moment().month(window.moment().month()).format('M') > +window.moment().month(month).format('M')}" x-text="month"></div>
                        </template>
                    </div>
                </div>
            </div>
            <div class="draws_page__middle">
                <div class="draws_page__filter">
                    <select class="draws_page__select">
                        <option value="Luxury">Luxury</option>
                    </select>
                    <div class="draws_page__input">
                        <input type="text" placeholder="SEARCH" style="--icon: #fff url({{ asset('assets/images/search.svg') }}) no-repeat center left 15px / 24px 24px;">
                    </div>
                </div>
            </div>
            <div class="draws_page__bottom">
                <div class="draws_page__col">
                    <template x-for="i in 10" :key="i">
                        <div class="draws_page__card">
                            <div class="draws_page__card-info">
                                <div class="draws_page__card-image">
                                    <img src="{{ asset('assets/images/winner_image.png') }}" alt="">
                                </div>
                                <div class="draws_page__card-texts">
                                    <div class="title">instant wins winners - malcom strachan</div>
                                    <div class="name">TECH BUNDLE WORTH £8,000</div>
                                    <div class="date">30 Aug - 01 Sep 2021</div>
                                </div>
                                <div class="draws_page__card-button">VIEW FULL RESULTS</div>
                            </div>
                            <div class="draws_page__card-date">
                                <div class="draws_page__card-date-in">
                                    <div class="line"></div>
                                    <div class="date">Sep 2021</div>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
                <div class="draws_page__line"></div>
                <div class="draws_page__col draws_page__col--reversed">
                    <template x-for="i in 10" :key="i">
                        <div class="draws_page__card">
                            <div class="draws_page__card-info">
                                <div class="draws_page__card-image">
                                    <img src="{{ asset('assets/images/winner_image.png') }}" alt="">
                                </div>
                                <div class="draws_page__card-texts">
                                    <div class="title">instant wins winners - malcom strachan</div>
                                    <div class="name">TECH BUNDLE WORTH £8,000</div>
                                    <div class="date">30 Aug - 01 Sep 2021</div>
                                </div>
                                <div class="draws_page__card-button">VIEW FULL RESULTS</div>
                            </div>
                            <div class="draws_page__card-date">
                                <div class="draws_page__card-date-in">
                                    <div class="line"></div>
                                    <div class="date">Sep 2021</div>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
        </div>
    </div>

</x-guest-layout>