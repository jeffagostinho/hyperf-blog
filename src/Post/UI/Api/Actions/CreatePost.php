<?php

declare(strict_types=1);

namespace HyperfBlog\Post\UI\Api\Actions;

use HyperfBlog\Post\Application\Create\{
    CreatePostCommand,
    CreatePostHandler
};
use HyperfBlog\Shared\Infrastructure\Http\Controller;

class CreatePost extends Controller
{
    public function index(): \Psr\Http\Message\ResponseInterface
    {
        $this->commandBus->addHandler(
            CreatePostCommand::class,
            CreatePostHandler::class
        );

        $command = new CreatePostCommand(
            $this->request->input('title'),
            $this->request->input('description')
        );

        $this->commandBus->dispatch($command);

        return $this->response->json([
            'message' => 'Post created.'
        ]);
    }
}