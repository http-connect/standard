<?php

declare(strict_types=1);

namespace HttpConnect\Standard\Config;

use HttpConnect\Standard\Validation\ValidatorMetadataInterface;
use Psr\Container\ContainerInterface;

interface RepositoryInterface extends ContainerInterface, ValidatorMetadataInterface
{
}
