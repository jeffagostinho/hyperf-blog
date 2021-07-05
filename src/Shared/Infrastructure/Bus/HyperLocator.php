<?php

declare(strict_types=1);

namespace HyperfBlog\Shared\Infrastructure\Bus;

use HyperfBlog\Shared\Domain\Bus\BusLocator;
use League\Tactician\Exception\MissingHandlerException;

class HyperLocator implements BusLocator
{
    protected array $handlers = [];

    public function addHandler(string $handler, string $commandClassName): void
    {
        $handlerInstance = make($handler);
        $this->handlers[$commandClassName] = $handlerInstance;
    }

    public function addHandlers(array $commandClassToHandlerMap): void
    {
        foreach ($commandClassToHandlerMap as $commandClass => $handler) {
            $this->addHandler($handler, $commandClass);
        }
    }

    public function getHandlerForCommand($commandName): object
    {
        if (!isset($this->handlers[$commandName])) {
            throw MissingHandlerException::forCommand($commandName);
        }

        return $this->handlers[$commandName];
    }
}
