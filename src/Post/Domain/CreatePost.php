<?php

declare(strict_types=1);

namespace HyperfBlog\Post\Domain;

use HyperfBlog\Post\Domain\ValueObject\{
    Description,
    Title
};

interface CreatePost
{
    public function create(Title $title, Description $description): void;
}