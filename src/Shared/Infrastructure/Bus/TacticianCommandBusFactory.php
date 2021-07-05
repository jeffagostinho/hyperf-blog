<?php

declare(strict_types=1);

namespace HyperfBlog\Shared\Infrastructure\Bus;

use League\Tactician\Handler\{
    CommandHandlerMiddleware,
    CommandNameExtractor\ClassNameExtractor,
    MethodNameInflector\HandleInflector
};
use Psr\Container\ContainerInterface;

class TacticianCommandBusFactory
{
    public function __invoke(ContainerInterface $container): TacticianCommandBus
    {
        $locator = new HyperLazyLocator();

        $commandHandlerMiddleware = new CommandHandlerMiddleware(
            new ClassNameExtractor(),
            $locator,
            new HandleInflector()
        );

        $middlewares = [
            $commandHandlerMiddleware
        ];

        return new TacticianCommandBus($middlewares, $locator);
    }
}
