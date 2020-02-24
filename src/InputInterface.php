<?php

declare(strict_types=1);

namespace HttpConnect\Standard;

use HttpConnect\Standard\Validation\ValidatorMetadataInterface;

interface InputInterface extends ValidatorMetadataInterface
{
    /**
     * @return string
     */
    public function __toString(): string;
}
