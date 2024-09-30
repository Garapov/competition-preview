<x-guest-layout>
    @livewire('main.hero')
    @livewire('main.tabs')
    @livewire('main.categories')

    @php
        $second_category = \App\Models\Category::where([
            ['id', '=', 2],
            ['active', '=', true],
        ])->first();
    @endphp
    @if ($second_category)
        @livewire('general.category', [
            'category' => $second_category
        ], key($second_category->id))
    @endif

    @livewire('main.wheel')


    @php
        $third_category = \App\Models\Category::where([
            ['id', '=', 3],
            ['active', '=', true],
        ])->first();
    @endphp
    @if ($third_category)
        @livewire('general.category', [
            'category' => $third_category
        ], key($third_category->id))
    @endif
    <img src="{{ asset('assets/images/content.svg') }}" alt="">
</x-guest-layout>