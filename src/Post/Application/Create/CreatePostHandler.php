<?php

declare(strict_types=1);

namespace HyperfBlog\Post\Application\Create;

use HyperfBlog\Post\Domain\{
    CreatePost as CreatePostContract,
    ValueObject\Description,
    ValueObject\Title
};
use HyperfBlog\Shared\Domain\Bus\{
    Command,
    CommandHandler
};

class CreatePostHandler implements CommandHandler
{
    private CreatePostContract $createPost;

    public function __construct(CreatePostContract $createPost)
    {
        $this->createPost = $createPost;
    }

    public function handle(Command $command)
    {
        $this->createPost->create(
            new Title($command->getTitle()),
            new Description($command->getDescription())
        );
    }
}