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
    <div class="main_wheel__steps @if($stepper_opened) main_wheel__steps--opened @endif">
        <div class="main_wheel__steps-tabs">
            <div class="main_wheel__steps-tab @if($currentStep == 1) main_wheel__steps-tab--active @endif" wire:click="setStep(1)">
                Step 1
            </div>
            <div class="main_wheel__steps-tab @if($currentStep == 2) main_wheel__steps-tab--active @endif" wire:click="setStep(2)">
                Step 2
            </div>
            <div class="main_wheel__steps-tab @if($currentStep == 3) main_wheel__steps-tab--active @endif" wire:click="setStep(3)">
                Step 3
            </div>
        </div>

        <div class="main_wheel__steps-content" style="--bg: #ac74f6 url({{ asset('assets/images/wheel_steps_bg.png') }}) bottom 0 left 0 / auto 97% no-repeat";>
            <div class="main_wheel__steps-content-top">
                <div class="title">Congratulations!</div>
                <div class="closer" wire:click="close_stepper">
                    <svg width="22" height="24" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.54137 5L17.2782 19M4.54139 19L10.9098 12L17.2782 5" stroke="white" stroke-width="1.5" stroke-linecap="round" />
                    </svg>
                </div>
            </div>
            @if($currentStep == 1)
                <div class="main_wheel__steps-block">
                    <div class="text">
                        @if ($index)
                            You’ve earned {{ $this->sectors[$this->index] }} credit which has been added to your wallet
                        @endif
                    </div>
                    <div class="text">
                        Promo code: [UNIQUECODE]
                    </div>
                </div>
                <div class="main_wheel__steps-button">
                    Want to spin again?
                </div>
            @endif

            @if($currentStep == 2)
                <div class="main_wheel__steps-block">
                    <div class="text">Выберите один из доступных призов</div>
                </div>
                <div class="main_wheel__steps-button">
                    Want to spin again?
                </div>
            @endif

            @if($currentStep == 3)
                <div class="main_wheel__steps-block">
                    <div class="text">Заберите ваш выигрыш прямо сейчас</div>
                </div>
                <div class="main_wheel__steps-button">
                    Want to spin again?
                </div>
            @endif
        </div>
    </div>
</div>