<?php

namespace App\Filament\Resources\RaffleResource\Widgets;

use Filament\Widgets\ChartWidget;
use Illuminate\Database\Eloquent\Model;

class TicketsChart extends ChartWidget
{
    protected static ?string $heading = 'Chart';
    public ?Model $record = null;

    protected function getData(): array
    {
        // dd($this->record->tickets);
        return [
            //
        ];
    }

    protected function getType(): string
    {
        return 'bubble';
    }
}
