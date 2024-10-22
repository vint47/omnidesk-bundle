<?php
namespace OmnideskBundle\Configuration\Group;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Class EditGroupRequestConfiguration
 * @package OmnideskBundle\Configuration\Group
 */
class EditGroupRequestConfiguration implements ConfigurationInterface
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
                    ->defaultNull()
                ->end()
                ->scalarNode('group_title')
                    ->defaultNull()
                ->end()
                ->scalarNode('group_from_name')
                    ->defaultNull()
                ->end()
                ->scalarNode('group_signature')
                    ->defaultNull()
                ->end()
            ->end();


        return $treeBuilder;
    }
}
