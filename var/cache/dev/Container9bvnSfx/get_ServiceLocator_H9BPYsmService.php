<?php

namespace Container9bvnSfx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_H9BPYsmService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.H9BPYsm' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.H9BPYsm'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'burger' => ['privates', '.errored..service_locator.H9BPYsm.App\\Entity\\Burgers', NULL, 'Cannot autowire service ".service_locator.H9BPYsm": it needs an instance of "App\\Entity\\Burgers" but this type has been excluded in "config/services.yaml".'],
            'burgersRepository' => ['privates', 'App\\Repository\\BurgersRepository', 'getBurgersRepositoryService', true],
        ], [
            'burger' => 'App\\Entity\\Burgers',
            'burgersRepository' => 'App\\Repository\\BurgersRepository',
        ]);
    }
}
