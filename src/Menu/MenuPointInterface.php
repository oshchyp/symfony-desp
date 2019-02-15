<?php
/**
 * Created by PhpStorm.
 * User: programmer_5
 * Date: 15.02.2019
 * Time: 14:27
 */

namespace App\Menu;


interface MenuPointInterface
{
    /**
     * @return null|string
     */
    public function getDefaultID(): ?string;

    /**
     * @return null|string
     */
    public function getDefaultParent(): ?string;

    /**
     * @return null|string
     */
    public function getLabel(): ?string;

    /**
     * @return null|string
     */
    public function getDescription(): ?string;

    /**
     * @return null|string
     */
    public function getRouteName(): ?string;

    /**
     * @return array|null
     */
    public function getRouteParams(): ?array;

    /**
     * @return bool
     */
    public function isActive(): bool;

    public function active(): void;

    public function inactive(): void;

}