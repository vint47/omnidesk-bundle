<?php
namespace OmnideskBundle\Configuration\User;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Class AddUserRequestConfiguration
 * @package OmnideskBundle\Configuration\User
 */
class AddUserRequestConfiguration implements ConfigurationInterface
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
                ->scalarNode('user_email')
                    ->defaultNull()
                ->end()
                ->scalarNode('user_phone')
                    ->defaultNull()
                ->end()
                ->scalarNode('user_full_name')
                    ->defaultNull()
                ->end()
                ->scalarNode('company_name')
                    ->defaultNull()
                ->end()
                ->scalarNode('company_position')
                    ->defaultNull()
                ->end()
                ->scalarNode('user_note')
                    ->defaultNull()
                ->end()
                ->scalarNode('language_id')
                    ->defaultNull()
                ->end()
                ->arrayNode('custom_fields')
                    ->prototype('scalar')
                    ->end()
                ->end()
            ->end();

        return $treeBuilder;
    }
}
