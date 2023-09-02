<?php

namespace App\Filament\Client\Resources\ServiceTypeResource\Pages;

use App\Filament\Client\Resources\ServiceTypeResource;
use Filament\Resources\Pages\EditRecord;

class EditServiceType extends EditRecord
{
    protected static string $resource = ServiceTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
