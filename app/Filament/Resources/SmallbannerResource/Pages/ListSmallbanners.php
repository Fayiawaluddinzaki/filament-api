<?php

namespace App\Filament\Resources\SmallbannerResource\Pages;

use App\Filament\Resources\SmallbannerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSmallbanners extends ListRecords
{
    protected static string $resource = SmallbannerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
