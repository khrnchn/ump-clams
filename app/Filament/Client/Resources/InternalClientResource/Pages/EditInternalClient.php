<?php

namespace App\Filament\Client\Resources\InternalClientResource\Pages;

use App\Filament\Client\Resources\InternalClientResource;
use Filament\Resources\Pages\EditRecord;

class EditInternalClient extends EditRecord
{
    protected static string $resource = InternalClientResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
