<?php

namespace App\Filament\Staff\Resources\PledgeResource\Pages;

use App\Filament\Staff\Resources\PledgeResource;
use Filament\Resources\Pages\EditRecord;

class EditPledge extends EditRecord
{
    protected static string $resource = PledgeResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
