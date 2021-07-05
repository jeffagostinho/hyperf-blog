<?php

declare(strict_types=1);

namespace HyperfBlog\Post\Application\Find;

use HyperfBlog\Post\Domain\{
    FindPost as FindPostContract,
    ValueObject\PostId
};
use HyperfBlog\Shared\Domain\Bus\{
    Command,
    CommandHandler
};

class FindPostHandler implements CommandHandler
{
    private FindPostContract $findPost;

    public function __construct(FindPostContract $findPost)
    {
        $this->findPost = $findPost;
    }

    public function handle(Command $command)
    {
        return $this->findPost->find(new PostId($command->getId()));
    }
}