<?php

namespace App\Filament\Client\Resources\AgreementResource\Pages;

use App\Filament\Client\Resources\AgreementResource;
use Filament\Resources\Pages\EditRecord;

class EditAgreement extends EditRecord
{
    protected static string $resource = AgreementResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
