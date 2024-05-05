<?php
namespace App\Filament\Resources\ArticleResource\Api;

use Rupadana\ApiService\ApiService;
use App\Filament\Resources\ArticleResource;
use Illuminate\Routing\Router;


class ArticleApiService extends ApiService
{
    protected static string | null $resource = ArticleResource::class;

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
