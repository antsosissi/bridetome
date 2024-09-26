<?php

namespace ContainerG58VYfq;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Openapi_ProviderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'api_platform.openapi.provider' shared service.
     *
     * @return \ApiPlatform\OpenApi\State\OpenApiProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'OpenApi'.\DIRECTORY_SEPARATOR.'State'.\DIRECTORY_SEPARATOR.'OpenApiProvider.php';

        $a = ($container->privates['api_platform.openapi.factory'] ?? self::getApiPlatform_Openapi_FactoryService($container));

        if (isset($container->privates['api_platform.openapi.provider'])) {
            return $container->privates['api_platform.openapi.provider'];
        }

        return $container->privates['api_platform.openapi.provider'] = new \ApiPlatform\OpenApi\State\OpenApiProvider($a);
    }
}
