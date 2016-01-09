<?php

namespace Ndewez\WebHome\AuthApiBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader;
use Symfony\Component\DependencyInjection\Reference;

/**
 * Class NdewezWebHomeAuthApiExtension.
 */
class NdewezWebHomeAuthApiExtension extends Extension
{
    /**
     * {@inheritDoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new Loader\XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.xml');

        // Set url and version for real calls
        if (null !== $config['api_url']) {
            $container->getDefinition('webhome_auth.connector')
                ->replaceArgument(1, $config['api_url'])
                ->replaceArgument(2, $config['api_version']);

            return;
        }

        // Use mock
        $container->getDefinition('webhome_auth.client')
            ->replaceArgument(0, new Reference('webhome_auth.connector.mock'));
    }
}
