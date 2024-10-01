<div class="main_wheel">
    <div class="main_wheel__in">
        <div class="main_wheel__title">Your chance to <span>win for free</span></div>
        <div class="main_wheel__subtitle">
            Every spin is a win - try now
        </div>
        <div class="main_wheel__wheel">
            <img src="{{ asset('/assets/images/wheel_butterfly.png') }}" alt="">
            <div class="main_wheel__wheel_layer main_wheel__wheel_layer--background">
                <img src="{{ asset('assets/images/wheel_background.png') }}" alt="">
            </div>
            <div class="main_wheel__wheel_layer main_wheel__wheel_layer--numbers @if($isWheelSpinning) isSpinning @endif" style="--deg: {{$spinning_deg}}deg; --time: {{$spinning_time}}s; --count: {{ count($sectors) }};">
                <img src="{{ asset('assets/images/wheel_numbers.png') }}" alt="">
                @foreach ($sectors as $key=>$sector)
                    <div class="main_wheel__segment" style="--position: {{ $key }};">
                        <span class="number">{{ $sector }}</span>
                    </div>
                @endforeach
                
            </div>
            <div class="main_wheel__wheel_layer main_wheel__wheel_layer--frame">
                <img src="{{ asset('assets/images/wheel_frame.png') }}" alt="">
            </div>
            <div class="main_wheel__wheel_layer main_wheel__wheel_layer--button" wire:click="spin_wheel">
                <img src="{{ asset('assets/images/wheel_button.png') }}" alt="">
            </div>

            <div class="main_wheel__badge" wire:click="spin_wheel">
                <img src="{{ asset('assets/images/wheel_badge.png') }}" alt="">
            </div>
            <div class="main_wheel__butterfyes" wire:click="spin_wheel">
                <img src="{{ asset('assets/images/wheel_butterfyes.png') }}" alt="">
            </div>

            
        </div>
        <div class="main_wheel__bottom">
            <div class="main_wheel__info">
                <div class="title">What do the numbers mean?</div>
                <div class="text">
                    Each number on the wheel corresponds to a different prize.<br />
                    Check out the <a href="#">full BONUS list here</a> to see what you could win
                </div>
            </div>
            <div class="main_wheel__scroll">
                <div class="arrow"><img src="{{ asset('assets/images/arrow.svg') }}" alt=""></div>
                <div class="title">Scroll down </div>
                <div class="text">For daily deals and surprises waiting just for you</div>
            </div>
            <div class="main_wheel__info">
                <div class="title">Terms and Conditions Apply</div>
                <div class="text">
                    By spinning the wheel, you agree to our <a href="#">Terms and Conditions</a>
                </div>
            </div>
        </div>
    </div>
</div>