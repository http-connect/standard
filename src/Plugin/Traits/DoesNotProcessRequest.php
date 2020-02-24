<?php

declare(strict_types=1);

namespace HttpConnect\Standard\Plugin\Traits;

use Psr\Http\Message\RequestInterface;

trait DoesNotProcessRequest
{
    /**
     * @param RequestInterface $resource
     * @return RequestInterface
     */
    public function processRequest(RequestInterface $resource): RequestInterface
    {
        return $resource;
    }
}
