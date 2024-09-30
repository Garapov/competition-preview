<div>
    @if (count($categories))
        <div class="main_categories">
            <div class="main_categories__in">
                
                <div class="main_categories__items">
                    @foreach ($categories as $category)
                        <div class="main_categories__item @if($category->id == $active) main_categories__item--active @endif" wire:click="change_category('{{ $category->id }}')">
                            <div class="main_categories__item-image">
                                <img src="{{ asset('storage/'.$category->icon) }}" alt="">
                            </div>
                            <div class="main_categories__item-text">
                                {{ $category->name }}
                            </div>
                        </div>
                    @endforeach
                </div>
                @livewire('general.category', [
                    'category' => $active_category
                ], key($active_category->id))
            </div>
        </div>
    @endif
</div>
