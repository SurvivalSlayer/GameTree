<?php

namespace ContainerXojEuAE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_FrIHHjCService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.FrIHHjC' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.FrIHHjC'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'annoncesRepository' => ['privates', 'App\\Repository\\AnnoncesRepository', 'getAnnoncesRepositoryService', true],
        ], [
            'annoncesRepository' => 'App\\Repository\\AnnoncesRepository',
        ]);
    }
}
