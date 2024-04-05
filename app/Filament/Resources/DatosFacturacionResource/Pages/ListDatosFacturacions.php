<?php

namespace App\Filament\Resources\DatosFacturacionResource\Pages;

use App\Filament\Resources\DatosFacturacionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDatosFacturacions extends ListRecords
{
    protected static string $resource = DatosFacturacionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
