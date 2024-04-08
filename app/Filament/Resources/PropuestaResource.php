<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PropuestaResource\Pages;
use App\Filament\Resources\PropuestaResource\RelationManagers;
use App\Models\Propuesta;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PropuestaResource extends Resource
{
    protected static ?string $model = Propuesta::class;
    protected static ?int $navigationSort = 2;

    protected static ?string $navigationIcon = 'heroicon-m-presentation-chart-bar';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('cliente_id')
                    ->relationship('cliente', 'nombre_empresa')
                    ->required(),
                Forms\Components\TextInput::make('nombre')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('fecha')
                    ->required(),
                Forms\Components\TextInput::make('resultados')
                    ->required()
                    ->maxLength(255),
                // Forms\Components\TextInput::make('item_id')
                //     ->required()
                //     ->numeric(),
                Forms\Components\Select::make('estado_propuesta_id')
                    ->relationship('estadoPropuesta', 'nombre')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('cliente.nombre_empresa')
                    ->numeric()
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('id')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nombre')
                    ->searchable(),
                Tables\Columns\TextColumn::make('fecha')
                    ->date()
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('resultados')
                    ->searchable(),
                // Tables\Columns\TextColumn::make('item_id')
                //     ->numeric()
                //     ->sortable(),
                Tables\Columns\TextColumn::make('estadoPropuesta.nombre')
                    ->numeric()
                    ->sortable()
                    ->badge()
                    ->searchable(),
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
                // Tables\Filters\TernaryFilter::make('estadoPropuesta.nombre'),
                Tables\Filters\SelectFilter::make('estadoPropuesta')
                ->relationship('estadoPropuesta', 'nombre'),
                Tables\Filters\SelectFilter::make('cliente')
                ->relationship('cliente', 'nombre_empresa'),
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
            // RelationManagers\ItemsRelationManager::class,
            // RelationManagers\EstadoPropuestaRelationManager::class
            
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPropuestas::route('/'),
            'create' => Pages\CreatePropuesta::route('/create'),
            'edit' => Pages\EditPropuesta::route('/{record}/edit'),
        ];
    }
}
