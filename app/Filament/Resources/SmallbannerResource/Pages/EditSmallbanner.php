<?php

namespace App\Filament\Resources\SmallbannerResource\Pages;

use App\Filament\Resources\SmallbannerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSmallbanner extends EditRecord
{
    protected static string $resource = SmallbannerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
