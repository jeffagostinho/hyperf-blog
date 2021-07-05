<?php

declare(strict_types=1);

namespace HyperfBlog\Post\UI\Api\Actions;

use HyperfBlog\Post\Application\Find\{
    FindPostCommand,
    FindPostHandler
};
use HyperfBlog\Shared\Infrastructure\Http\Controller;

class GetPost extends Controller
{
    public function index(int $id): \Psr\Http\Message\ResponseInterface
    {
        $this->commandBus->addHandler(
            FindPostCommand::class,
            FindPostHandler::class
        );

        $command = new FindPostCommand($id);

        $post = $this->commandBus->dispatch($command);

        return $this->response->json($post);
    }
}