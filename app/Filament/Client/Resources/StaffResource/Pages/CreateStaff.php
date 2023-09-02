<?php

namespace App\Filament\Client\Resources\StaffResource\Pages;

use App\Filament\Client\Resources\StaffResource;
use Filament\Resources\Pages\CreateRecord;

class CreateStaff extends CreateRecord
{
    protected static string $resource = StaffResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
