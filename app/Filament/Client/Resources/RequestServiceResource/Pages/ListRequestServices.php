<?php

namespace App\Filament\Client\Resources\RequestServiceResource\Pages;

use App\Filament\Client\Resources\RequestServiceResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRequestServices extends ListRecords
{
    protected static string $resource = RequestServiceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
