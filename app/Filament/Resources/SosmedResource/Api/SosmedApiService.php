<?php
namespace App\Filament\Resources\SosmedResource\Api;

use Rupadana\ApiService\ApiService;
use App\Filament\Resources\SosmedResource;
use Illuminate\Routing\Router;


class SosmedApiService extends ApiService
{
    protected static string | null $resource = SosmedResource::class;

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
