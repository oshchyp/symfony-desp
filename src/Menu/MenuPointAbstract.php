<?php
/**
 * Created by PhpStorm.
 * User: programmer_5
 * Date: 15.02.2019
 * Time: 15:09
 */

namespace App\Menu;


abstract class MenuPointAbstract implements MenuPointInterface
{

    /**
     * @var bool
     */
    private $active = false;

    /**
     * @return null|string
     */
    public function getDescription(): ?string
    {
        return null;
    }

    /**
     * @return array|null
     */
    public function getRouteParams(): ?array
    {
        return [];
    }

    /**
     * @return bool
     */
    public function isActive(): bool
    {
        return $this->active;
    }

    public function active(): void
    {
        $this->active = true;
    }

    public function inactive(): void
    {
        $this->active = false;
    }

    /**
     * @return null|string
     */
    public function getDefaultID(): ?string
    {
        return null;
    }

    /**
     * @return null|string
     */
    public function getDefaultParent(): ?string
    {
        return null;
    }
}