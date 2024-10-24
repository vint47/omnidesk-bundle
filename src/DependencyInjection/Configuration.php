<?php
namespace OmnideskBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Class Configuration
 * @package OmnideskBundle\DependencyInjection
 */
class Configuration implements ConfigurationInterface
{
    /**
     * @return TreeBuilder
     */
    public function getConfigTreeBuilder():TreeBuilder
    {
        $treeBuilder = new TreeBuilder('omnidesk');

        $rootNode = $treeBuilder->getRootNode();
        $rootNode
            ->children()
                ->scalarNode('domain')
                    ->isRequired()
                ->end()
                ->scalarNode('email')
                    ->isRequired()
                ->end()
                ->scalarNode('key')
                    ->isRequired()
                ->end()
            ->end();

        return $treeBuilder;
    }
}
