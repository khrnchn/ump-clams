<?php

namespace App\Filament\Admin\Resources\InternalClientResource\Pages;

use App\Filament\Admin\Resources\InternalClientResource;
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
