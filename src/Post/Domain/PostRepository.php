<?php

declare(strict_types=1);

namespace HyperfBlog\Post\Domain;

use HyperfBlog\Post\Domain\ValueObject\{
    Description,
    PostId,
    Title
};

interface PostRepository
{
    public function create(Title $title, Description $description): void;

    public function find(PostId $postId);
}