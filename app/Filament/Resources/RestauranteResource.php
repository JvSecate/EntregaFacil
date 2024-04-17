<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RestauranteResource\Pages;
use App\Filament\Resources\RestauranteResource\RelationManagers;
use App\Models\Restaurante;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RestauranteResource extends Resource
{
    protected static ?string $model = Restaurante::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\TextInput::make('nome')
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('endereco')
                ->required()
                ->maxLength(255),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nome'),
                Tables\Columns\TextColumn::make('endereco'),
                Tables\Columns\TextColumn::make('created_at')->label('Criado em'),
                Tables\Columns\TextColumn::make('updated_at')->label('Atualizado em'),
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
                ])->label('Opções'),
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
            'index' => Pages\ListRestaurantes::route('/'),
            'create' => Pages\CreateRestaurante::route('/create'),
            'edit' => Pages\EditRestaurante::route('/{record}/edit'),
        ];
    }
}
