<?php

declare(strict_types=1);

namespace HyperfBlog\Post\Application\Find;

use HyperfBlog\Post\Domain\{
    FindPost as FindPostContract,
    PostRepository,
    ValueObject\PostId
};

class FindPost implements FindPostContract
{
    private PostRepository $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function find(PostId $postId)
    {
        return $this->postRepository->find($postId);
    }
}