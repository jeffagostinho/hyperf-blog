<?php

declare(strict_types=1);

namespace HyperfBlog\Post\Infrastructure\Providers;

use HyperfBlog\Post\Application\{
    Create\CreatePost,
    Find\FindPost
};
use HyperfBlog\Post\Domain\{
    CreatePost as CreatePostContract,
    FindPost as FindPostContract,
    PostRepository as PostRepositoryContract
};
use HyperfBlog\Post\Infrastructure\Persistence\PostRepository;

class DependencyInjection
{
    public static function register(): array
    {
        return [
            CreatePostContract::class => CreatePost::class,
            FindPostContract::class => FindPost::class,
            PostRepositoryContract::class => PostRepository::class,
        ];
    }
}