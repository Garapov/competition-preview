<div>
    @if (count($elites))
        <div class="main_elite" style="--background: url({{asset('assets/images/elite_bg.png')}}) 50%  50% / cover no-repeat;">
            <div class="main_elite__in">
                <div class="main_elite__title">Elite</div>
                <div class="main_elite__subtitle">
                    Dream big, live luxuriously<br/>
                    Your exclusive chance is just a scroll away
                </div>
                <div class="main_elite__items">
                    @foreach ($elites as $elite)
                        <div class="main_elite__item" style="--duration: {{ rand(3, 10) }}s">
                            <div class="main_elite__item-border">
                                <img src="{{ asset('assets/images/elite_frame.png') }}" alt="">
                                <div class="main_elite__item-circle">
                                    <img src="{{ asset('assets/images/elite_circle.svg') }}" alt="">
                                </div>
                                <div class="main_elite__item-product">
                                    <img src="{{ asset('storage/'.$elite->image) }}" alt="">
                                </div>
                            </div>
                        </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
    @endif
</div>
