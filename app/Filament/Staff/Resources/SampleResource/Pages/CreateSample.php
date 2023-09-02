<?php

namespace App\Filament\Staff\Resources\SampleResource\Pages;

use App\Filament\Staff\Resources\SampleResource;
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
