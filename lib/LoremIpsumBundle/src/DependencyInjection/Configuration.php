<?php


namespace KnpU\LoremIpsumBundle\DependencyInjection;


use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{

    /**
     * Generates the configuration tree builder.
     *
     * @return \Symfony\Component\Config\Definition\Builder\TreeBuilder The tree builder
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('knpu_lorem_ipsum');

        $rootNode
            ->children()
                ->booleanNode('unicorns_are_real')->defaultTrue()->end()
                ->integerNode('min_sunshine')->defaultValue(15)->end()
            ->end()
        ;

        return $treeBuilder;
    }
}