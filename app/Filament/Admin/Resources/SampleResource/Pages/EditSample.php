<?php

namespace App\Filament\Admin\Resources\SampleResource\Pages;

use App\Filament\Admin\Resources\SampleResource;
use Filament\Resources\Pages\EditRecord;

class EditSample extends EditRecord
{
    protected static string $resource = SampleResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
