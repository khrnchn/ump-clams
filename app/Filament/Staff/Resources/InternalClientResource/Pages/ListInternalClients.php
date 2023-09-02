<?php

namespace App\Filament\Staff\Resources\InternalClientResource\Pages;

use App\Filament\Staff\Resources\InternalClientResource;
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
