<?php
namespace App\Filament\Resources\ContactResource\Api;

use Rupadana\ApiService\ApiService;
use App\Filament\Resources\ContactResource;
use Illuminate\Routing\Router;


class ContactApiService extends ApiService
{
    protected static string | null $resource = ContactResource::class;

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
