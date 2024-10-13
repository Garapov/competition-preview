<div class="giveaway" style="--background: url('{{ asset('/assets/images/giveaway_bg.png') }}') 50% 0 / cover no-repeat">
    <div class="giveaway__in">
        <div class="giveaway__left">
            <div class="giveaway__left-top">
                <div class="giveaway__left-text">The draw from the ambassador  </div>
                <div class="giveaway__left-title">GIVEAWAY</div>
                <div class="giveaway__left-text">
                    Have a chance to WIN a FREE Prize<br/>
                    And get 1 Free Draw Entry
                </div>

                {{-- <div class="giveaway__left-items">
                    <div class="giveaway__left-item">
                        <div class="giveaway__left-item-left"></div>
                        <div class="giveaway__left-item-right"></div>
                    </div>
                </div> --}}
            </div>
        </div>


        <div class="giveaway__right">
            @if(count($stories))
                <div class="giveaway__stories glide">
                    <div class="glide__track" data-glide-el="track">
                        <div class="glide__slides">
                            @foreach ($stories as $story)
                                <div class="giveaway__story">
                                    <img src="{{ asset('storage/' . $story->media) }}" alt="">
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="giveaway__bullets glide__bullets" data-glide-el="controls[nav]">
                        @foreach ($stories as $key=>$story)
                            <button class="glide__bullet" data-glide-dir="={{ $key }}">
                                <div class="glide__bullet__in"></div>
                            </button>
                        @endforeach
                    </div>
                </div>
            @endif
            <img src="{{ asset('/assets/images/giveaway_phone.png') }}" alt="">
            <div class="giveaway__right-island">
                <img src="{{ asset('/assets/images/giveaway_island.png') }}" alt="">
            </div>
        </div>
    </div>
</div>
