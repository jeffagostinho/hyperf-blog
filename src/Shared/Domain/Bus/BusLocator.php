<?php

declare(strict_types=1);

namespace HyperfBlog\Shared\Domain\Bus;

use League\Tactician\Handler\Locator\HandlerLocator;

interface BusLocator extends HandlerLocator
{
    public function addHandler(string $handler, string $commandClassName);

    public function addHandlers(array $commandClassToHandlerMap);
}
