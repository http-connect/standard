<?php

declare(strict_types=1);

namespace HttpConnect\Standard\Plugin\Traits;

use HttpConnect\Standard\InputInterface;

trait DoesNotProcessInput
{
    /**
     * @param InputInterface $resource
     * @return InputInterface
     */
    public function processInput(InputInterface $resource): InputInterface
    {
        return $resource;
    }
}
