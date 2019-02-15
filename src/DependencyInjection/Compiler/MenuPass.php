<?php
/**
 * Created by PhpStorm.
 * User: programmer_5
 * Date: 15.02.2019
 * Time: 15:43
 */

namespace App\DependencyInjection\Compiler;


use App\Menu\Menu;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class MenuPass implements CompilerPassInterface
{

    /**
     * @param ContainerBuilder $container
     */
    public function process(ContainerBuilder $container)
    {
        if (!$container->has(Menu::class)){
            return;
        }

        $definition = $container->findDefinition(Menu::class);
        $taggedServices = $container->findTaggedServiceIds('menu.point');
        foreach ($taggedServices as $id=>$tags){
            foreach ($tags as $attributes){
                $definition->addMethodCall('addPoint', [new Reference($id), $attributes['id'], $attributes['parent']]);
            }
        }

    }
}