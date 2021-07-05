<?php

declare(strict_types=1);

namespace HyperfBlog\Post\Application\Find;

use HyperfBlog\Shared\Domain\Bus\Command;

class FindPostCommand implements Command
{
    private int $id;

    public function __construct(int $id)
    {
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }
}