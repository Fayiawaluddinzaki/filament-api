<?php

namespace App\Filament\Resources\DestinationsResource\Pages;

use App\Filament\Resources\DestinationsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDestinations extends EditRecord
{
    protected static string $resource = DestinationsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
