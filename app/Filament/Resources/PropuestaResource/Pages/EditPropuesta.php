<?php

namespace App\Filament\Resources\PropuestaResource\Pages;

use App\Filament\Resources\PropuestaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPropuesta extends EditRecord
{
    protected static string $resource = PropuestaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
