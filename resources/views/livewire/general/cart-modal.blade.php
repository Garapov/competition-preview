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
                                        <input type="number" min="1" wire:model="count">
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
                            {{ $raffle }}
                            
                        </div>
                    @endif

                    @if ($activeTab == 'postal')

                    All details must be either typed or clearly written, we cannot enter you into a competition if the writing on your postcard is not legible. If we receive 1 postcard in the post containing multiple entries this will not comply with the above terms and conditions. If we believe one person is attempting to enter using multiple names and addresses all associated entries will be voided, as per the paid entry route. Send entries to: Storm Competitions, PO BOX 811, NORTHWICH, CW9 9WW. All postal entries must be received before the close of the competition, any entries that fail to follow the criteria mentioned above will be void as per any Entry received. Entrants MUST have an active account on our website at the time the postal entries are processed, all details on postcards MUST match the name and address on the account to which they are to be added. Please ensure you have read and agree to our terms and conditions before entering by post or online.

                    @endif
                    
                </div>
            </div>
        </div>
    @endif
</div>
