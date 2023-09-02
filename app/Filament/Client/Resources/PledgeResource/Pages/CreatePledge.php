<?php

namespace App\Filament\Client\Resources\PledgeResource\Pages;

use App\Filament\Client\Resources\PledgeResource;
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
