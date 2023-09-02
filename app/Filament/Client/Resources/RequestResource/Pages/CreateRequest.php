<?php

namespace App\Filament\Client\Resources\RequestResource\Pages;

use App\Filament\Client\Resources\RequestResource;
use Filament\Resources\Pages\CreateRecord;

class CreateRequest extends CreateRecord
{
    protected static string $resource = RequestResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
