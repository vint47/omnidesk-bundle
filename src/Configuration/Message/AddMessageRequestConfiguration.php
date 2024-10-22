<?php
namespace OmnideskBundle\Configuration\Message;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Class AddMessageRequestConfiguration
 * @package OmnideskBundle\Configuration\Message
 */
class AddMessageRequestConfiguration implements ConfigurationInterface
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
                ->integerNode('case_id')
                    ->isRequired()
                ->end()
                ->scalarNode('content')
                    ->isRequired()
                ->end()
                ->scalarNode('content_html')
                    ->isRequired()
                ->end()
                ->integerNode('staff_id')
                    ->defaultNull()
                ->end()
                ->integerNode('user_id')
                    ->defaultNull()
                ->end()
                ->arrayNode('attachments')
                    ->prototype('scalar')
                ->end()
            ->end();

        return $treeBuilder;
    }
}
