<?php

namespace App\Filament\Admin\Resources\ServiceTypeResource\Pages;

use App\Filament\Admin\Resources\ServiceTypeResource;
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
