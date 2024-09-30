<?php

namespace App\Filament\Resources\RaffleResource\Pages;

use App\Filament\Resources\RaffleResource;
use App\Filament\Resources\RaffleResource\Widgets\TicketsChart;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRaffle extends EditRecord
{
    protected static string $resource = RaffleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    protected function getFooterWidgets(): array
    {
        return [
            TicketsChart::class
        ];
    }

}
