<?php

namespace ContainerDQLBfPH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContenuPageControllergetContenusParPageService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.w11WYxH.App\Controller\ContenuPageController::getContenusParPage()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.w11WYxH.App\\Controller\\ContenuPageController::getContenusParPage()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'em' => ['privates', '.errored..service_locator.w11WYxH.Doctrine\\Orm\\EntityManagerInterface', NULL, 'Cannot autowire service ".service_locator.w11WYxH": it references interface "Doctrine\\Orm\\EntityManagerInterface" but no such service exists. Did you mean "Doctrine\\ORM\\EntityManagerInterface"?'],
        ], [
            'em' => 'Doctrine\\Orm\\EntityManagerInterface',
        ]))->withContext('App\\Controller\\ContenuPageController::getContenusParPage()', $container);
    }
}
