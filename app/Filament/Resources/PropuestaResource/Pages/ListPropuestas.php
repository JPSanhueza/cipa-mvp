<?php

namespace App\Filament\Resources\PropuestaResource\Pages;

use App\Filament\Resources\PropuestaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPropuestas extends ListRecords
{
    protected static string $resource = PropuestaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
