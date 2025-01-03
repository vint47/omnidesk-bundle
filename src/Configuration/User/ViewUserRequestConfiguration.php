<?php
namespace OmnideskBundle\Configuration\User;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Class ViewUserRequestConfiguration
 * @package OmnideskBundle\Configuration\User
 */
class ViewUserRequestConfiguration implements ConfigurationInterface
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
                ->integerNode('user_id')
                    ->isRequired()
                ->end()
            ->end();

        return $treeBuilder;
    }
}
