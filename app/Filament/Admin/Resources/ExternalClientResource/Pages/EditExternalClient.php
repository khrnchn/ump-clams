<?php

namespace App\Filament\Admin\Resources\ExternalClientResource\Pages;

use App\Filament\Admin\Resources\ExternalClientResource;
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
