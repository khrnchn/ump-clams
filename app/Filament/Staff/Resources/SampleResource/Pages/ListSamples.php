<?php

namespace App\Filament\Staff\Resources\SampleResource\Pages;

use App\Filament\Staff\Resources\SampleResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSamples extends ListRecords
{
    protected static string $resource = SampleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
