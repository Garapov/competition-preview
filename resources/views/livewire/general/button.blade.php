<a href="{{ $link }}" class="general__button general__button--{{$type}}" wire:navigate>
    @if ($icon)
        <span class="general__button-icon">
            <img src="{{$icon}}" alt="">
        </span>
    @endif
    <span class="general__button-text">
        {{$text}}
    </span>
</a>
