<?php

namespace App\Filament\Admin\Resources\RequestServiceResource\Pages;

use App\Filament\Admin\Resources\RequestServiceResource;
use Filament\Resources\Pages\EditRecord;

class EditRequestService extends EditRecord
{
    protected static string $resource = RequestServiceResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
