<?php

declare(strict_types=1);

namespace HyperfBlog\Shared\Infrastructure\Bus;

use HyperfBlog\Shared\Domain\Bus\BusLocator;
use League\Tactician\Exception\MissingHandlerException;
use League\Tactician\Handler\Locator\HandlerLocator;

class HyperLazyLocator extends HyperLocator implements HandlerLocator, BusLocator
{
    public function addHandler(string $handler, string $commandClassName): void
    {
        $this->handlers[$commandClassName] = function () use ($handler) {
            return make($handler);
        };
    }

    public function getHandlerForCommand($commandName): object
    {
        if (!is_callable($this->handlers[$commandName])) {
            throw MissingHandlerException::forCommand($commandName);
        }

        $handler = $this->handlers[$commandName];

        return $handler();
    }
}
