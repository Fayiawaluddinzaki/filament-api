<?php
namespace App\Filament\Resources\DestinationsResource\Api;

use Rupadana\ApiService\ApiService;
use App\Filament\Resources\DestinationsResource;
use Illuminate\Routing\Router;


class DestinationsApiService extends ApiService
{
    protected static string | null $resource = DestinationsResource::class;

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
