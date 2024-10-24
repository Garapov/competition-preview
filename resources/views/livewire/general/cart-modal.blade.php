<div>
    @if ($modal_opened)
        <div class="general__modal raffle__modal" style="--acc: url('{{ asset('assets/images/general_acc.png') }}') 50% 50% / cover no-repeat;">
            <div class="general__modal__wrap">
                <div class="general__modal_in" wire:click.outside="closeModal">
                    <div class="general__modal_top">
                        <div class="general__modal_tabs">
                            <div class="general__modal_tab @if ($activeTab == 'online') general__modal_tab--active @endif" wire:click="changeTab('online')">Online entry</div>
                            <div class="general__modal_tab @if ($activeTab == 'postal') general__modal_tab--active @endif" wire:click="changeTab('postal')">free postal entry</div>
                        </div>
                        <div class="general__modal_close" wire:click="closeModal">
                            <img src="{{ asset('assets/images/close.svg') }}" alt="">
                        </div>
                    </div>
                    @if ($activeTab == 'online' && $raffle)
                        <div class="general__modal_middle">
                            <div class="modal_product">
                                <div class="modal_product__left">
                                    <img src="{{ asset('storage/' . $raffle->image) }}" alt="">
                                </div>
                                <div class="modal_product__right">
                                    <div class="modal_product__name">
                                        {{ $raffle->name }}
                                    </div>
                                    <div class="modal_product__price_wrap">
                                        @if ($raffle->discount_price)
                                            <div class="modal_product__oldprice">
                                                <div class="left">£{{ $raffle->price }}</div>
                                            </div>
                                        @endif
                                        <div class="modal_product__price">
                                            @if ($raffle->discount_price)
                                                <div class="left">£{{ $raffle->discount_price }}</div>
                                            @else
                                                <div class="left">£{{ $raffle->price }}</div>
                                            @endif
                                            <div class="right">Per entry</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal_amount">
                                <div class="modal_amount__left">
                                    <div class="modal_amount__button" wire:click="minus">
                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.33203 16H26.6654" stroke="#333333" stroke-width="1.5" stroke-linecap="round" />
                                        </svg>
                                    </div>
                                    <div class="modal_amount__count">
                                        <input type="number" min="1" wire:model.live="count">
                                    </div>
                                    <div class="modal_amount__button"  wire:click="plus">
                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.33203 16H26.6654M15.9987 26.6667V16L15.9987 5.33337" stroke="#333333" stroke-width="1.5" stroke-linecap="round" />
                                          </svg>
                                    </div>
                                </div>
                                <div class="modal_amount__right">
                                    The amount of tickets you want to buy for this competition
                                </div>
                            </div>

                            <div class="modal_select">
                                <div class="modal_select__title">Quick select</div>
                                <div class="modal_select__items">
                                    @if ($raffle->tickets_count > 20)
                                        <div class="modal_select__item @if ($count == 20)modal_select__item--selected @endif" wire:click="setCount(20)">
                                            <div class="count">20</div>
                                            <div class="caption">tickets</div>
                                        </div>
                                    @endif
                                    @if ($raffle->tickets_count > 100)
                                        <div class="modal_select__item @if ($count == 100)modal_select__item--selected @endif"  wire:click="setCount(100)">
                                            <div class="count">100</div>
                                            <div class="caption">tickets</div>
                                        </div>
                                    @endif
                                    @if ($raffle->tickets_count > 300)
                                        <div class="modal_select__item @if ($count == 300)modal_select__item--selected @endif" wire:click="setCount(300)">
                                            <div class="count">300</div>
                                            <div class="caption">tickets</div>
                                        </div>
                                    @endif
                                    @if ($raffle->tickets_count > 600)
                                        <div class="modal_select__item @if ($count == 600)modal_select__item--selected @endif modal_select__item--best" wire:click="setCount(600)">
                                            <div class="count">600</div>
                                            <div class="caption">tickets</div>
                                            <div class="badge">MOST CHANCES</div>
                                        </div>
                                    @endif
                                </div>
                                <div class="modal_select__caption">
                                    More tickets - more chances to win
                                </div>
                            </div>

                            <div class="modal_button">
                                <button class="modal_button__add" wire:click="addToCart">
                                    ADD TO BASKET
                                </button>
                            </div>
                        </div>
                    @endif

                    @if ($activeTab == 'postal')
                        <div class="general__modal_text">
                            <strong>
                                To enter our competitions by post, send an unenclosed postcard via stamped post stating: Which competition you would like to take part in, the answer to the question specific to that particular competition along with your personal details as follows, One Entry per Postcard;
                            </strong>
                            <ul>
                                <li><span>Full Name</span></li>
                                <li><span>Date of Birth</span></li>
                                <li><span>Postal Address</span></li>
                                <li><span>Email address</span></li>
                                <li><span>One contact number</span></li>
                                <li><span>Remember postcards must also contain the correct answer to the question for the competition desired.</span></li>
                            </ul>
                            <p>
                                All details must be either typed or clearly written, we cannot enter you into a competition if the writing on your postcard is not legible. If we receive 1 postcard in the post containing multiple entries this will not comply with the above terms and conditions. If we believe one person is attempting to enter using multiple names and addresses all associated entries will be voided, as per the paid entry route. Send entries to: Storm Competitions, PO BOX 811, NORTHWICH, CW9 9WW. All postal entries must be received before the close of the competition, any entries that fail to follow the criteria mentioned above will be void as per any Entry received. Entrants MUST have an active account on our website at the time the postal entries are processed, all details on postcards MUST match the name and address on the account to which they are to be added. Please ensure you have read and agree to our terms and conditions before entering by post or online.
                            </p>
                        </div>
                    @endif
                    
                </div>
            </div>
        </div>
    @endif
</div>
