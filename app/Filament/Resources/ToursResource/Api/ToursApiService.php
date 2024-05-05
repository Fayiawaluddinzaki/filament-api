<?php
namespace App\Filament\Resources\ToursResource\Api;

use Rupadana\ApiService\ApiService;
use App\Filament\Resources\ToursResource;
use Illuminate\Routing\Router;


class ToursApiService extends ApiService
{
    protected static string | null $resource = ToursResource::class;

    public static function handlers() : array
    {
        return [
            Handlers\CreateHandler::class,
            Handlers\UpdateHandler::class,
            Handlers\DeleteHandler::class,
            Handlers\PaginationHandler::class,
            Handlers\DetailHandler::class
        ];

    }
}
