<?php

namespace HttpConnect\Standard\Plugin\Traits;

use HttpConnect\Standard\EnvironmentInterface;

trait AlwaysEnabled
{
    /**
     * @param EnvironmentInterface $environment
     * @return bool
     */
    public function isEnabled(EnvironmentInterface $environment): bool
    {
        return true;
    }
}
