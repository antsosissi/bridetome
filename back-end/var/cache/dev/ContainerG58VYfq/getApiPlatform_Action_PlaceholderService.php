<?php

namespace ContainerG58VYfq;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Action_PlaceholderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'api_platform.action.placeholder' shared service.
     *
     * @return \ApiPlatform\Action\PlaceholderAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Action'.\DIRECTORY_SEPARATOR.'PlaceholderAction.php';

        return $container->services['api_platform.action.placeholder'] = new \ApiPlatform\Action\PlaceholderAction();
    }
}
