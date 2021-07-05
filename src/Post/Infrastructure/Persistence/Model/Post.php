<?php

declare(strict_types=1);

namespace HyperfBlog\Post\Infrastructure\Persistence\Model;

use HyperfBlog\Shared\Infrastructure\Persistence\Model;

class Post extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'description'];
}