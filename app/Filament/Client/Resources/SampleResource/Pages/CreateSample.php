<?php

namespace App\Filament\Client\Resources\SampleResource\Pages;

use App\Filament\Client\Resources\SampleResource;
use Filament\Resources\Pages\CreateRecord;

class CreateSample extends CreateRecord
{
    protected static string $resource = SampleResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
