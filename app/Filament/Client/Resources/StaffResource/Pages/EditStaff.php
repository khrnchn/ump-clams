<?php

namespace App\Filament\Client\Resources\StaffResource\Pages;

use App\Filament\Client\Resources\StaffResource;
use Filament\Resources\Pages\EditRecord;

class EditStaff extends EditRecord
{
    protected static string $resource = StaffResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
