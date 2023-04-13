<?php

namespace Container6wxV9jr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_5hqoB0IService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.5hqoB0I' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.5hqoB0I'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'burgersRepository' => ['privates', 'App\\Repository\\BurgersRepository', 'getBurgersRepositoryService', true],
            'sandwichsRepository' => ['privates', 'App\\Repository\\SandwichsRepository', 'getSandwichsRepositoryService', true],
        ], [
            'burgersRepository' => 'App\\Repository\\BurgersRepository',
            'sandwichsRepository' => 'App\\Repository\\SandwichsRepository',
        ]);
    }
}