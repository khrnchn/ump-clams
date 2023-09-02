<?php

namespace App\Filament\Client\Resources\ExternalClientResource\Pages;

use App\Filament\Client\Resources\ExternalClientResource;
use Filament\Resources\Pages\EditRecord;

class EditExternalClient extends EditRecord
{
    protected static string $resource = ExternalClientResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
