<?php
/**
 * Created by PhpStorm.
 * User: programmer_5
 * Date: 15.02.2019
 * Time: 14:58
 */

namespace App\Menu;


class MenuPoint extends MenuPointAbstract
{

    /**
     * @return null|string
     */
    public function getLabel(): ?string
    {
        return 'Test point';
    }

    /**
     * @return null|string
     */
    public function getRouteName(): ?string
    {
        return '/';
    }

}