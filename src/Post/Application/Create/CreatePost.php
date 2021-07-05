<?php

declare(strict_types=1);

namespace HyperfBlog\Post\Application\Create;

use HyperfBlog\Post\Domain\CreatePost as CreatePostContract;
use HyperfBlog\Post\Domain\{
    PostRepository,
    ValueObject\Description,
    ValueObject\Title
};

class CreatePost implements CreatePostContract
{
    private PostRepository $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function create(Title $title, Description $description): void
    {
        $this->postRepository->create($title, $description);
    }
}