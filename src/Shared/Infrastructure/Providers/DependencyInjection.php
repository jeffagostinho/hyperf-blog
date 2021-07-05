<?php

declare(strict_types=1);

namespace HyperfBlog\Shared\Infrastructure\Providers;

use HyperfBlog\Shared\Domain\Bus\CommandBus;
use HyperfBlog\Shared\Infrastructure\Bus\TacticianCommandBusFactory;

class DependencyInjection
{
    public static function register(): array
    {
        return [
            CommandBus::class => TacticianCommandBusFactory::class,
        ];
    }
}