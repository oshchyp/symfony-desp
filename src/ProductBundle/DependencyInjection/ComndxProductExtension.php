<?php
/**
 * Created by PhpStorm.
 * User: programmer_5
 * Date: 05.02.2019
 * Time: 11:25
 */

namespace App\ProductBundle\DependencyInjection;


use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;

class ComndxProductExtension extends Extension
{
    /**
     * Loads a specific configuration.
     *
     * @throws \InvalidArgumentException When provided tag is not defined in this extension
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $container->prependExtensionConfig('app.admin_menu', ['test'=>'wedwedwedwedwedwedwedweedwedw']);
//        $definition = $container->setParameter('app.admin_menu',['test'=>'wedwedwedwedwedwedwedweedwedw']);
//        dump($container->getParameter('app.admin_menu'));
    }
}