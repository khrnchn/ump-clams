<?php

namespace App\Filament\Staff\Resources\RequestServiceResource\Pages;

use App\Filament\Staff\Resources\RequestServiceResource;
use Filament\Resources\Pages\CreateRecord;

class CreateRequestService extends CreateRecord
{
    protected static string $resource = RequestServiceResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
