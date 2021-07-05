<?php

declare(strict_types=1);

namespace HyperfBlog\Shared\Domain\Bus;

interface CommandHandler
{
    public function handle(Command $command);
}