<?php

declare(strict_types=1);

namespace HttpConnect\Standard\Plugin\Traits;

use HttpConnect\Standard\ResourceInterface;

trait DoesNotProcessResource
{
    /**
     * @param ResourceInterface $resource
     * @return ResourceInterface
     */
    public function processResource(ResourceInterface $resource): ResourceInterface
    {
        return $resource;
    }
}
