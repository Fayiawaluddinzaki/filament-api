<?php

namespace App\Filament\Resources\ToursResource\Pages;

use App\Filament\Resources\ToursResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTours extends ListRecords
{
    protected static string $resource = ToursResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
