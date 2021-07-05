<?php

declare(strict_types=1);

namespace HyperfBlog\Shared\Infrastructure\Http;

abstract class Router
{
    abstract public static function routes(): void;
}