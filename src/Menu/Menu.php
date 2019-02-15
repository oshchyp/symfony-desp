<?php
/**
 * Created by PhpStorm.
 * User: programmer_5
 * Date: 15.02.2019
 * Time: 14:48
 */

namespace App\Menu;


use App\Menu\Exceptions\MenuPointIDException;
use App\Menu\Exceptions\MenuPointKeyException;

class Menu implements MenuInterface
{

    private $points = [];

    private $pointsByParent=[];

    /**
     * @param MenuPointInterface $point
     * @param null|string $id
     * @param null|string $parent
     * @throws MenuPointIDException
     * @throws MenuPointKeyException
     */
    public function addPoint(MenuPointInterface $point, ?string $id = null, ?string $parent = null): void
    {


        if (null === $id){
            $id = $point->getDefaultID();
            if (!$id){
                throw new MenuPointIDException();
            }
        }

        if (null === $parent){
            $parent = $point->getDefaultParent();
            if (!$parent){
                $parent = 'root';
            }
        }

        if (array_key_exists($id,$this->points)){
            throw new MenuPointKeyException();
        }

        $this->points[$id] = [
            'parent' => $parent,
            'point' => $point
        ];

        $this->pointsByParent[$parent][$id] = [
            'id' => $id,
            'point' => $point
        ];
    }

    /**
     * @param string $id
     * @return MenuPointInterface|null
     */
    public function getPoint(string $id): ?MenuPointInterface
    {
        if (array_key_exists($id,$this->points)){
            return $this->points[$id]['point'];
        }
        return null;
    }

    public function points(){
        return $this->points;
    }
}