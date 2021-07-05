<?php

declare(strict_types=1);

namespace HyperfBlog\Shared\Infrastructure\Persistence;

use Hyperf\DbConnection\Model\Model as BaseModel;
use Hyperf\ModelCache\{
    Cacheable,
    CacheableInterface
};

abstract class Model extends BaseModel implements CacheableInterface
{
    use Cacheable;
}
