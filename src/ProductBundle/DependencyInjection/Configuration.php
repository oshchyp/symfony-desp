<?php
/**
 * Created by PhpStorm.
 * User: programmer_5
 * Date: 05.02.2019
 * Time: 09:58
 */

namespace App\ProductBundle\DependencyInjection;


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
//        $rootNode = $treeBuilder->root('acme_social');
//
//        $rootNode
//            ->children()
//            ->arrayNode('twitter')
//            ->children()
//            ->integerNode('client_id')->end()
//            ->scalarNode('client_secret')->end()
//            ->end()
//            ->end() //
//            ->end()
//        ;

         return $treeBuilder;
    }
}