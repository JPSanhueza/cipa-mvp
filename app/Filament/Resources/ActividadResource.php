<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ActividadResource\Pages;
use App\Filament\Resources\ActividadResource\RelationManagers;
use App\Models\Actividad;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ActividadResource extends Resource
{
    protected static ?string $model = Actividad::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static bool $shouldRegisterNavigation = false;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nombre')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('activo_fijo')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('rrhh')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('hrs_unidades')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('sub_total_uf')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('sub_total_pesos')
                    ->required()
                    ->numeric(),
                Forms\Components\Select::make('item_id')
                    ->relationship('item', 'id')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nombre')
                    ->searchable(),
                Tables\Columns\TextColumn::make('activo_fijo')
                    ->searchable(),
                Tables\Columns\TextColumn::make('rrhh')
                    ->searchable(),
                Tables\Columns\TextColumn::make('hrs_unidades')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sub_total_uf')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sub_total_pesos')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('item.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListActividads::route('/'),
            'create' => Pages\CreateActividad::route('/create'),
            'edit' => Pages\EditActividad::route('/{record}/edit'),
        ];
    }
}
