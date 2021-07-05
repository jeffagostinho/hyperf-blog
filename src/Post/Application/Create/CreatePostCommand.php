<?php

declare(strict_types=1);

namespace HyperfBlog\Post\Application\Create;

use HyperfBlog\Shared\Domain\Bus\Command;

class CreatePostCommand implements Command
{
    private ?string $title;
    private ?string $description;

    public function __construct(?string $title, ?string $description)
    {
        $this->title = $title;
        $this->description = $description;
    }

    public function getTitle(): string
    {
        return $this->title ?? '';
    }

    public function getDescription(): string
    {
        return $this->description ?? '';
    }
}