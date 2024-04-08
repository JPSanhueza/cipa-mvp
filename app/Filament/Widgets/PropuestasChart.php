<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;


class PropuestasChart extends ChartWidget
{
    protected static ?string $heading = 'Propuestas 2023';

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Propuestas nuevas creadas',
                    'data' => [0, 10, 5, 2, 21, 32, 45, 74, 65, 45, 77, 89],
                    'backgroundColor' => '#36A2EB',
                    'borderColor' => '#9BD0F5',
                ],
            ],
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
