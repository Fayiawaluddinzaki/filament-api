<?php

namespace App\Filament\Resources\VisaResource\Pages;

use App\Filament\Resources\VisaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVisa extends EditRecord
{
    protected static string $resource = VisaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
