<?php

namespace Container9bvnSfx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QbEmnbEService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.QbEmnbE' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.QbEmnbE'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'texmexsRepository' => ['privates', 'App\\Repository\\TexmexsRepository', 'getTexmexsRepositoryService', true],
        ], [
            'texmexsRepository' => 'App\\Repository\\TexmexsRepository',
        ]);
    }
}
