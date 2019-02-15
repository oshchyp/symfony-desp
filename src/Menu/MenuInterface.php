<?php
/**
 * Created by PhpStorm.
 * User: programmer_5
 * Date: 15.02.2019
 * Time: 14:20
 */

namespace App\Menu;


interface MenuInterface
{

    public function addPoint(MenuPointInterface $point, string $id, string $parent): void;

    public function getPoint(string $id): ?MenuPointInterface;

}