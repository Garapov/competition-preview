<div class="main_categories">
    <div class="main_categories__in">
        {{ $active }}
        <div class="main_categories__items">
            @foreach ($categories as $category)
                <div class="main_categories__item">{{ $category->name }}</div>
            @endforeach
        </div>
    </div>
</div>
