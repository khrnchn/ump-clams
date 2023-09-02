<?php

namespace App\Filament\Admin\Resources\SampleResource\Pages;

use App\Filament\Admin\Resources\SampleResource;
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
