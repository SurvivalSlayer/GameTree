<?php

namespace Container1LHM4xd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Errored_5TfNmXkService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.errored.5TfNmXk' shared service.
     *
     * @return \App\Controller\AnnoncesRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->throw('Cannot determine controller argument for "App\\Controller\\ApiController::list()": the $annoncesRepository argument is type-hinted with the non-existent class or interface: "App\\Controller\\AnnoncesRepository". Did you forget to add a use statement?');
    }
}
