<?php

declare(strict_types=1);

namespace HyperfBlog\Post\UI\Api\Routes;

use HyperfBlog\Post\UI\Api\Actions\{
    CreatePost,
    GetPost
};
use HyperfBlog\Shared\Infrastructure\Http\Router;
use Hyperf\HttpServer\Router\Router as HyperfRouter;

class Post extends Router
{
    public static function routes(): void
    {
        HyperfRouter::addGroup('/posts', function () {
            HyperfRouter::get('/{id}', [GetPost::class, 'index']);
            HyperfRouter::post('/create', [CreatePost::class, 'index']);
        });
    }
}