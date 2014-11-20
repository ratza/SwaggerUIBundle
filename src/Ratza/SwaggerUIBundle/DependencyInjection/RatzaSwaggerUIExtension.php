<?php
/**
 * This file is part of the Ratza package.
 *
 * @author Ion Marusic <ion.marusic@gmail.com>
 */

namespace Ratza\SwaggerUIBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Processor;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

/**
 * Class RatzaSwaggerUIExtension
 *
 * @package Ratza\SwaggerUIBundle\DependencyInjection
 */
class RatzaSwaggerUIExtension extends Extension
{
    /**
     * @param array             $configs
     * @param ContainerBuilder  $container
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $processor = new Processor();
        $configuration = new Configuration();
        $config = $processor->processConfiguration($configuration, $configs);

        $container->setParameter('ratza_swagger_ui.api_docs.path', $config['api_docs']['path']);
        $container->setParameter('ratza_swagger_ui.api_docs.route', $config['api_docs']['route']);
    }
}
