<?php

namespace App\Filament\Staff\Resources\ServiceTypeResource\Pages;

use App\Filament\Staff\Resources\ServiceTypeResource;
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
