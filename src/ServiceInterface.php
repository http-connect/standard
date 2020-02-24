<?php

declare(strict_types=1);

namespace HttpConnect\Standard;

use HttpConnect\Standard\Plugin\PluginInterface;
use HttpConnect\Standard\Validation\Exceptions\MetadataValidationFailedException;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\ContainerInterface;
use Psr\Http\Client\ClientExceptionInterface;

interface ServiceInterface
{
    /**
     * @return ContainerInterface
     */
    public function getActionPack(): ContainerInterface;

    /**
     * @return PluginInterface[]
     */
    public function getPlugins(): array;

    /**
     * @param string $key
     * @param InputInterface $input
     * @return ResourceInterface
     * @throws ContainerExceptionInterface
     * @throws MetadataValidationFailedException
     * @throws ClientExceptionInterface
     */
    public function call(string $key, InputInterface $input): ResourceInterface;
}
