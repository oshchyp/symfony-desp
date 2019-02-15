<?php
/**
 * Created by PhpStorm.
 * User: programmer_5
 * Date: 12.02.2019
 * Time: 10:32
 */

namespace App\SeoHeaders;


abstract class SeoHeadersAdapterAbstract implements SeoHeadersAdapterInterface
{
    /**
     * @var
     */
    private $entity;

    /**
     * @param SeoHeadersEntityInterface $entity
     * @return $this
     */
    public function loadEntity(SeoHeadersEntityInterface $entity): SeoHeadersAdapterInterface
    {
        $this->entity = $entity;
        return $this;
    }

    /**
     * @return string
     */
    abstract public function header() : string;

    /**
     * @return string
     */
    abstract public function title() : string;

    /**
     * @return string
     */
    abstract public function description() : string;

    /**
     * @return string
     */
    abstract public function keywords() : string;

}