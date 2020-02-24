<?php

declare(strict_types=1);

namespace HttpConnect\Standard;

use Psr\Http\Message\RequestInterface;

interface AuthInterface
{
    /**
     * @param RequestInterface $request
     * @return RequestInterface
     */
    public function decorateRequest(RequestInterface $request): RequestInterface;
}
