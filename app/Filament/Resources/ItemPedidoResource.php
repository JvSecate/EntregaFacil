<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ItemPedidoResource\Pages;
use App\Filament\Resources\ItemPedidoResource\RelationManagers;
use App\Models\ItemPedido;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ItemPedidoResource extends Resource
{
    protected static ?string $model = ItemPedido::class;

    protected static ?string $navigationIcon = 'heroicon-o-inbox-arrow-down';
    protected static ?string $navigationLabel = 'Dados do pedido';
    protected static ?string $navigationGroup = 'Pedidos';
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('pedido_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('produto_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('quantidade')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('pedido_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('produto_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('quantidade')
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
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListItemPedidos::route('/'),
            'create' => Pages\CreateItemPedido::route('/create'),
            'view' => Pages\ViewItemPedido::route('/{record}'),
            'edit' => Pages\EditItemPedido::route('/{record}/edit'),
        ];
    }
}
