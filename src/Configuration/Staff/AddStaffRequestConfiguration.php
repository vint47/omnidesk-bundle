<?php
namespace OmnideskBundle\Configuration\Staff;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Class AddStaffRequestConfiguration
 * @package OmnideskBundle\Configuration\Staff
 */
class AddStaffRequestConfiguration implements ConfigurationInterface
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
                ->scalarNode('staff_email')
                    ->isRequired()
                    ->cannotBeEmpty()
                ->end()
                ->scalarNode('staff_full_name')
                    ->defaultNull()
                ->end()
                ->scalarNode('staff_signature')
                    ->defaultNull()
                ->end()
            ->end();

        return $treeBuilder;
    }
}
