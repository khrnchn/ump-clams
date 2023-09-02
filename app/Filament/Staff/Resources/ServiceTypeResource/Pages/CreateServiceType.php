<?php

namespace App\Filament\Staff\Resources\ServiceTypeResource\Pages;

use App\Filament\Staff\Resources\ServiceTypeResource;
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
