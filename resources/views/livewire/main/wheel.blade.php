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

            
        </div>
    </div>
</div>