<?php

declare(strict_types=1);

namespace HyperfBlog\Post\Domain;

use HyperfBlog\Post\Domain\ValueObject\PostId;

interface FindPost
{
    public function find(PostId $postId);
}