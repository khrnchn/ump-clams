<?php

namespace App\Filament\Client\Resources\ServiceResource\Pages;

use App\Filament\Client\Resources\ServiceResource;
use Filament\Resources\Pages\CreateRecord;

class CreateService extends CreateRecord
{
    protected static string $resource = ServiceResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
