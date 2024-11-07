<x-guest-layout>
    <x-slot:pagetitle class="font-bold">
        basket
    </x-slot>
    <div class="cart_page">
        <div class="cart_page__in">
            <div class="cart_page__left">
                @livewire('cart.total.products')
            </div>
            <div class="cart_page__right">
                @livewire('cart.total.summary')
            </div>
        </div>
    </div>
</x-guest-layout>