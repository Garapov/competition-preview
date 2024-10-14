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

    @livewire('main.elite')


    @php
        $fourth_category = \App\Models\Category::where([
            ['id', '=', 4],
            ['active', '=', true],
        ])->first();
    @endphp
    @if ($fourth_category)
        @livewire('general.category', [
            'category' => $fourth_category
        ], key($fourth_category->id))
    @endif

    @php
        $fiveth_category = \App\Models\Category::where([
            ['id', '=', 5],
            ['active', '=', true],
        ])->first();
    @endphp
    @if ($fiveth_category)
        @livewire('general.category', [
            'category' => $fiveth_category
        ], key($fiveth_category->id))
    @endif

    @livewire('main.giveaway')
    @livewire('main.join')

    @livewire('general.cart-modal')
</x-guest-layout>