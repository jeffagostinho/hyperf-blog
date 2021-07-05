<?php

declare(strict_types=1);

namespace HyperfBlog\Post\Infrastructure\Persistence;

use HyperfBlog\Post\Domain\{
    PostRepository as PostRepositoryContract,
    ValueObject\Description,
    ValueObject\PostId,
    ValueObject\Title
};
use HyperfBlog\Post\Infrastructure\Persistence\Model\Post;

class PostRepository implements PostRepositoryContract
{
    public function create(Title $title, Description $description): void
    {
        Post::create([
            'title' => $title->value(),
            'description' => $description->value()
        ]);
    }

    public function find(PostId $postId)
    {
        return Post::find($postId->value());
    }
}