<?php
namespace App\Filament\Resources\SmallbannerResource\Api;

use Rupadana\ApiService\ApiService;
use App\Filament\Resources\SmallbannerResource;
use Illuminate\Routing\Router;


class SmallbannerApiService extends ApiService
{
    protected static string | null $resource = SmallbannerResource::class;

    public static function handlers() : array
    {
        return [
            // Handlers\CreateHandler::class,
            // Handlers\UpdateHandler::class,
            // Handlers\DeleteHandler::class,
            Handlers\PaginationHandler::class,
            // Handlers\DetailHandler::class
        ];

    }
}
