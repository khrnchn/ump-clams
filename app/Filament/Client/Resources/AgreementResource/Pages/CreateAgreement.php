<?php

namespace App\Filament\Client\Resources\AgreementResource\Pages;

use App\Filament\Client\Resources\AgreementResource;
use Filament\Resources\Pages\CreateRecord;

class CreateAgreement extends CreateRecord
{
    protected static string $resource = AgreementResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
