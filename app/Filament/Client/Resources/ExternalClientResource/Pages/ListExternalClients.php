<?php

namespace App\Filament\Client\Resources\ExternalClientResource\Pages;

use App\Filament\Client\Resources\ExternalClientResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListExternalClients extends ListRecords
{
    protected static string $resource = ExternalClientResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
