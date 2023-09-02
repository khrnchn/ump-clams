<?php

namespace App\Filament\Staff\Resources\PledgeResource\Pages;

use App\Filament\Staff\Resources\PledgeResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePledge extends CreateRecord
{
    protected static string $resource = PledgeResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
