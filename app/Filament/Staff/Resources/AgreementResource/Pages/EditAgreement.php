<?php

namespace App\Filament\Staff\Resources\AgreementResource\Pages;

use App\Filament\Staff\Resources\AgreementResource;
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
