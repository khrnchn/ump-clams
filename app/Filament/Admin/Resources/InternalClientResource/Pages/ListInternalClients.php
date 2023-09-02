<?php

namespace App\Filament\Admin\Resources\InternalClientResource\Pages;

use App\Filament\Admin\Resources\InternalClientResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInternalClients extends ListRecords
{
    protected static string $resource = InternalClientResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
