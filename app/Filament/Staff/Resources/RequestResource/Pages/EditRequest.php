<?php

namespace App\Filament\Staff\Resources\RequestResource\Pages;

use App\Filament\Staff\Resources\RequestResource;
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
