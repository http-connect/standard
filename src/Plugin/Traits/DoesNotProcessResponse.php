<?php

declare(strict_types=1);

namespace HttpConnect\Standard\Plugin\Traits;

use Psr\Http\Message\ResponseInterface;

trait DoesNotProcessResponse
{
    /**
     * @param ResponseInterface $resource
     * @return ResponseInterface
     */
    public function processResponse(ResponseInterface $resource): ResponseInterface
    {
        return $resource;
    }
}
