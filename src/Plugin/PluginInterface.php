<?php

declare(strict_types=1);

namespace HttpConnect\Standard\Plugin;

use HttpConnect\Standard\ActionInterface;
use HttpConnect\Standard\EnvironmentInterface;
use HttpConnect\Standard\InputInterface;
use HttpConnect\Standard\ResourceInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

interface PluginInterface
{
    /**
     * @param EnvironmentInterface $environment
     * @return bool
     */
    public function isEnabled(EnvironmentInterface $environment): bool;

    /**
     * @param ActionInterface $action
     * @return ActionInterface
     */
    public function processAction(ActionInterface $action): ActionInterface;

    /**
     * @param InputInterface $input
     * @return InputInterface
     */
    public function processInput(InputInterface $input): InputInterface;

    /**
     * @param ResourceInterface $resource
     * @return ResourceInterface
     */
    public function processResource(ResourceInterface $resource): ResourceInterface;

    /**
     * @param RequestInterface $request
     * @return RequestInterface
     */
    public function processRequest(RequestInterface $request): RequestInterface;

    /**
     * @param ResponseInterface $response
     * @return ResponseInterface
     */
    public function processResponse(ResponseInterface $response): ResponseInterface;
}
