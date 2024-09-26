<?php

namespace ContainerG58VYfq;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Action_DocumentationService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'api_platform.action.documentation' shared service.
     *
     * @return \ApiPlatform\Symfony\Action\DocumentationAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Symfony'.\DIRECTORY_SEPARATOR.'Action'.\DIRECTORY_SEPARATOR.'DocumentationAction.php';

        return $container->services['api_platform.action.documentation'] = new \ApiPlatform\Symfony\Action\DocumentationAction(($container->privates['api_platform.metadata.resource.name_collection_factory.cached'] ?? self::getApiPlatform_Metadata_Resource_NameCollectionFactory_CachedService($container)), 'Hello API Platform', '', '1.0.0', ($container->privates['api_platform.openapi.factory'] ?? self::getApiPlatform_Openapi_FactoryService($container)), ($container->privates['api_platform.state_provider.documentation.content_negotiation'] ?? $container->load('getApiPlatform_StateProvider_Documentation_ContentNegotiationService')), ($container->privates['api_platform.state_processor.documentation.write'] ?? $container->load('getApiPlatform_StateProcessor_Documentation_WriteService')), ($container->privates['api_platform.negotiator'] ??= new \Negotiation\Negotiator()), $container->parameters['api_platform.docs_formats']);
    }
}
