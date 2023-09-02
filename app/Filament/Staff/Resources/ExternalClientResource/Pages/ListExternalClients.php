<?php

namespace App\Filament\Staff\Resources\ExternalClientResource\Pages;

use App\Filament\Staff\Resources\ExternalClientResource;
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
