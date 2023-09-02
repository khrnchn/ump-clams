<?php

namespace App\Filament\Client\Resources\ServiceTypeResource\Pages;

use App\Filament\Client\Resources\ServiceTypeResource;
use Filament\Resources\Pages\CreateRecord;

class CreateServiceType extends CreateRecord
{
    protected static string $resource = ServiceTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
