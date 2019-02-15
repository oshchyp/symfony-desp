<?php
/**
 * Created by PhpStorm.
 * User: programmer_5
 * Date: 12.02.2019
 * Time: 10:45
 */

namespace App\Product\SwoHeaders;


use App\SeoHeaders\SeoHeadersAdapterAbstract;

class SeoHeadersProduct extends SeoHeadersAdapterAbstract
{

    public $test_attribute;

    function header(): string
    {
        return 'header product';
    }

    function title(): string
    {
        return 'title product';
    }

    function description(): string
    {
        return 'title product';
    }

    function keywords(): string
    {
        return 'title product';
    }
}