<?php
/**
 * This file is part of the Ratza package.
 *
 * @author Ion Marusic <ion.marusic@gmail.com>
 */

namespace Ratza\SwaggerUIBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Class Configuration
 *
 * @package Ratza\SwaggerUIBundle\DependencyInjection
 */
class Configuration implements ConfigurationInterface
{
    /**
     * @return TreeBuilder
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $treeBuilder
            ->root('ratza_swagger_ui')
            ->children()
                ->scalarNode('auth_key_prefix')
                    ->defaultValue('Bearer ')
                ->end()
                ->scalarNode('auth_field_location')
                    ->defaultValue('header')
                ->end()
                ->scalarNode('auth_field_key')
                    ->defaultValue('Authorization')
                ->end()
                ->arrayNode('api_docs')
                    ->addDefaultsIfNotSet()
                    ->children()
                        ->scalarNode('path')
                            ->defaultValue('api/api-docs')
                        ->end()
                        ->booleanNode('route')
                            ->defaultFalse()
                        ->end()
                    ->end()
                ->end()
            ->end();

        return $treeBuilder;
    }
}
