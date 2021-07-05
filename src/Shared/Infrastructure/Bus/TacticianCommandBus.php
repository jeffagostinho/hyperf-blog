<?php

declare(strict_types=1);

namespace HyperfBlog\Shared\Infrastructure\Bus;

use HyperfBlog\Shared\Domain\Bus\{
    BusLocator,
    Command,
    CommandBus
};

final class TacticianCommandBus extends \League\Tactician\CommandBus implements CommandBus
{
    private BusLocator $locator;

    public function __construct(array $middleware, BusLocator $locator)
    {
        parent::__construct($middleware);

        $this->locator = $locator;
    }

    public function dispatch(Command $command)
    {
        return $this->handle($command);
    }

    public function addHandler(string $commandClassName, string $handlerClassName): void
    {
        $this->locator->addHandler($handlerClassName, $commandClassName);
    }
}
