<?php
namespace App\Filament\Resources\VisaResource\Api;

use Rupadana\ApiService\ApiService;
use App\Filament\Resources\VisaResource;
use Illuminate\Routing\Router;


class VisaApiService extends ApiService
{
    protected static string | null $resource = VisaResource::class;

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
