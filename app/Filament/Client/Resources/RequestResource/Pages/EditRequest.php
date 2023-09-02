<?php

namespace App\Filament\Client\Resources\RequestResource\Pages;

use App\Filament\Client\Resources\RequestResource;
use Filament\Resources\Pages\EditRecord;

class EditRequest extends EditRecord
{
    protected static string $resource = RequestResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
