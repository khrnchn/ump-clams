<?php

namespace App\Filament\Client\Resources\ExternalClientResource\Pages;

use App\Filament\Client\Resources\ExternalClientResource;
use Filament\Resources\Pages\CreateRecord;

class CreateExternalClient extends CreateRecord
{
    protected static string $resource = ExternalClientResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
