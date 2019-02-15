<?php
/**
 * Created by PhpStorm.
 * User: programmer_5
 * Date: 12.02.2019
 * Time: 10:51
 */

namespace App\SeoHeaders;


interface SeoHeadersAdapterInterface
{

    public function loadEntity(SeoHeadersEntityInterface $entity): SeoHeadersAdapterInterface;

    /**
     * @return string
     */
    public function header(): string;

    /**
     * @return string
     */
    public function title(): string;

    /**
     * @return string
     */
    public function description(): string;

    /**
     * @return string
     */
    public function keywords(): string;

}