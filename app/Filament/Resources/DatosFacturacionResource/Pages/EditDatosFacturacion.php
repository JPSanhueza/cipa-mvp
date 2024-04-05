<?php

namespace App\Filament\Resources\DatosFacturacionResource\Pages;

use App\Filament\Resources\DatosFacturacionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDatosFacturacion extends EditRecord
{
    protected static string $resource = DatosFacturacionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
