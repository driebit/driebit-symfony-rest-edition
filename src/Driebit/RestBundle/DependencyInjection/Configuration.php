<?php

namespace Driebit\RestBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Configuration
 *
 * @author Esther Weimann <esther@driebit.nl>
 * @copyright Copyright (c) 2014 Driebit BV (http://www.driebit.nl) 
 */ 
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('driebit_rest');

        return $treeBuilder;
    }
}
 