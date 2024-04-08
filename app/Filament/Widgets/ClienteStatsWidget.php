<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class ClienteStatsWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Propuestas', '120')
                ->description('11 crecimiento')
                ->descriptionIcon('heroicon-m-arrow-trending-up'),
            Stat::make('Propuestas en Borrador', '21%')
                ->description('7% decrecimiento')
                ->descriptionIcon('heroicon-m-arrow-trending-down'),
            Stat::make('Horas Hombre * item promedio', '3:12')
                ->description('3% crecimiento')
                ->descriptionIcon('heroicon-m-arrow-trending-up'),
        ];
    }
}
