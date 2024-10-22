<?php
namespace OmnideskBundle\Configuration\Group;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Class ViewGroupRequestConfiguration
 * @package OmnideskBundle\Configuration\Group
 */
class ViewGroupRequestConfiguration implements ConfigurationInterface
{
    /**
     * @return TreeBuilder
     */
    public function getConfigTreeBuilder():TreeBuilder
    {
        $treeBuilder = new TreeBuilder('params');

        $rootNode = $treeBuilder->getRootNode();

        $rootNode
            ->children()
                ->scalarNode('group_id')
                    ->isRequired()
                ->end()
            ->end();


        return $treeBuilder;
    }
}
