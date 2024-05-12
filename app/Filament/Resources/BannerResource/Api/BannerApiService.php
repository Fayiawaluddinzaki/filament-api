<?php
namespace App\Filament\Resources\BannerResource\Api;

use Rupadana\ApiService\ApiService;
use App\Filament\Resources\BannerResource;
use Illuminate\Routing\Router;


class BannerApiService extends ApiService
{
    protected static string | null $resource = BannerResource::class;

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
