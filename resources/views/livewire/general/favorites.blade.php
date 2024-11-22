<div class="header__minicart" x-data="{ isOpened: false, }">
    <div class="header__minicart-opener" @click="isOpened = !isOpened">
        <div class="icon">
            <img src="{{ asset('assets/images/favorites.svg') }}" alt="">
        </div>
        <div class="count" x-text="$store.favorites.list.filter(item => item != null).length"></div>
    </div>

    <template x-if="$store.cart.list.filter(item => item != null).length > 0">
        <div class="header__minicart-body" x-show="isOpened" @click.outside="isOpened = false">
            <template x-for="raffle in $store.favorites.list.filter(item => item != null)" :key="raffle.id">
                <div class="favorites__item">
                    <div class="favorites__item-left">
                        <div class="favorites__item-image">
                            <img :src="raffle.image" alt="">
                        </div>
                    </div>
                    <div class="favorites__item-middle" x-text="raffle.name"></div>
                    <div class="favorites__item-right">
                        <div class="favorites__item-remove-button">
                            <img src="{{ asset('assets/images/heart_white.svg') }}" alt="">
                        </div>
                    </div>
                </div>
            </template>
        </div>
    </template>
</div>
