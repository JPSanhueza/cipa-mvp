<?php

namespace App\Filament\Resources\EstadoPropuestaResource\Pages;

use App\Filament\Resources\EstadoPropuestaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEstadoPropuesta extends EditRecord
{
    protected static string $resource = EstadoPropuestaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
