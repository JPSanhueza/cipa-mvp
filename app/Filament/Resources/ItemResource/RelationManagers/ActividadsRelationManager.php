<?php

namespace App\Filament\Resources\ItemResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ActividadsRelationManager extends RelationManager
{
    protected static string $relationship = 'actividads';

    public function form(Form $form): Form
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
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('nombre')
            ->columns([
                Tables\Columns\TextColumn::make('nombre'),
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
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
