<?php

namespace Ndewez\WebHome\AuthApiBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Class Configuration.
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('webhome_auth_api');

        $rootNode
            ->children()
                ->scalarNode('api_url')->defaultNull()->end()
                ->scalarNode('api_version')->defaultValue(0)->end()
            ->end();

        return $treeBuilder;
    }
}
