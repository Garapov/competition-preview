<div class="main_tabs">
    <div class="main_tabs__in">
        @foreach ($tabs as $tab)
            <div class="main_tabs__item @if($tab == $active) main_tabs__item--active @endif" wire:click="change_tab('{{ $tab }}')">{{ $tab }}</div>
        @endforeach
    </div>
</div>