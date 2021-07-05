<?php

declare(strict_types=1);

namespace HyperfBlog\Shared\Domain\Bus;

interface CommandBus
{
    public function dispatch(Command $command);

    public function addHandler(string $commandClassName, string $handlerClassName): void;
}
