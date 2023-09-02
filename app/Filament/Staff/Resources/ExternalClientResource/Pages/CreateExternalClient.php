<?php

namespace App\Filament\Staff\Resources\ExternalClientResource\Pages;

use App\Filament\Staff\Resources\ExternalClientResource;
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
