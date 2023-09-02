<?php

namespace App\Filament\Staff\Resources\InternalClientResource\Pages;

use App\Filament\Staff\Resources\InternalClientResource;
use Filament\Resources\Pages\CreateRecord;

class CreateInternalClient extends CreateRecord
{
    protected static string $resource = InternalClientResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
