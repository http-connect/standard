<?php

declare(strict_types=1);

namespace HttpConnect\Standard;

interface ResourceInterface
{
    /**
     * @return string
     */
    public function __toString(): string;
}
