<?php

namespace App\Filament\Resources\ItemPedidoResource\Pages;

use App\Filament\Resources\ItemPedidoResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewItemPedido extends ViewRecord
{
    protected static string $resource = ItemPedidoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
