<?php
/**
 * Created by PhpStorm.
 * User: programmer_5
 * Date: 12.02.2019
 * Time: 10:44
 */

namespace App\Product;


use App\SeoHeaders\SeoHeadersAdapterAbstract;
use App\SeoHeaders\SeoHeadersAdapterInterface;
use App\SeoHeaders\SeoHeadersEntityInterface;

class Product implements SeoHeadersEntityInterface
{

    /**
     * @var SeoHeadersAdapterAbstract
     */
    private $seoHeaders;

    /**
     * Product constructor.
     * @param SeoHeadersAdapterInterface $seoHeadersAdapterAbstract
     */
    public function __construct(SeoHeadersAdapterInterface $seoHeadersAdapterAbstract)
    {
        $this->seoHeaders = $seoHeadersAdapterAbstract;
    }

    private $name;

    private $price;

    private $description;

    /**
     * @return SeoHeadersAdapterAbstract|\App\SeoHeaders\SeoHeadersAdapterInterface
     */
    public function createSeoHeaders(){
        return $this->seoHeaders->loadEntity($this);
    }

    public function getHeader(): ?string
    {
        // TODO: Implement getHeader() method.
    }
}