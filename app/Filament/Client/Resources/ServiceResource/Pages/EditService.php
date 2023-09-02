<?php

namespace App\Filament\Client\Resources\ServiceResource\Pages;

use App\Filament\Client\Resources\ServiceResource;
use Filament\Resources\Pages\EditRecord;

class EditService extends EditRecord
{
    protected static string $resource = ServiceResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
