<div class="main_categories">
    <div class="main_categories__in">
        {{ $active }}
        <div class="main_categories__items">
            @foreach ($categories as $category)
                <div class="main_categories__item @if($category->id == $active) main_categories__item--active @endif" wire:click="change_category('{{ $category->id }}')">
                    <div class="ain_categories__item-image">
                        <img src="{{ asset('storage/'.$category->icon) }}" alt="">
                    </div>
                    <div class="main_categories__item-text">
                        {{ $category->name }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
