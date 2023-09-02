<?php

namespace App\Filament\Client\Resources\InternalClientResource\Pages;

use App\Filament\Client\Resources\InternalClientResource;
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
