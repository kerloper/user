<?php

namespace User\Factory\Service;

use Interop\Container\ContainerInterface;
use Laminas\Cache\Service\StorageAdapterFactoryInterface;
use Laminas\ServiceManager\Factory\FactoryInterface;
use User\Service\CacheService;

class CacheServiceFactory implements FactoryInterface
{
    /**
     * @param ContainerInterface $container
     * @param string             $requestedName
     * @param null|array         $options
     *
     * @return CacheService
     */
    public function __invoke(ContainerInterface $container, string $requestedName, array $options = null): CacheService
    {
        return new CacheService(
            $container->get(StorageAdapterFactoryInterface::class)
        );
    }
}