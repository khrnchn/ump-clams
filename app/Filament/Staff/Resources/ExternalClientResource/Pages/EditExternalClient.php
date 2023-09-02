<?php

namespace App\Filament\Staff\Resources\ExternalClientResource\Pages;

use App\Filament\Staff\Resources\ExternalClientResource;
use Filament\Resources\Pages\EditRecord;

class EditExternalClient extends EditRecord
{
    protected static string $resource = ExternalClientResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
