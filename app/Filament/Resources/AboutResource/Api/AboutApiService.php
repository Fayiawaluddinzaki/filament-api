<?php
namespace App\Filament\Resources\AboutResource\Api;

use Rupadana\ApiService\ApiService;
use App\Filament\Resources\AboutResource;
use Illuminate\Routing\Router;


class AboutApiService extends ApiService
{
    protected static string | null $resource = AboutResource::class;

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
