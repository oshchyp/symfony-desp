<?php
/**
 * Created by PhpStorm.
 * User: programmer_5
 * Date: 12.02.2019
 * Time: 12:13
 */

namespace App\Product\SwoHeaders;


use App\Product\SwoHeaders\SeoHeadersProduct;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Controller\ArgumentValueResolverInterface;
use Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata;

class SeoHeadersProductValueResolver
{

    /**
     * Whether this resolver can resolve the value for the given ArgumentMetadata.
     *
     * @param Request $request
     * @param ArgumentMetadata $argument
     *
     * @return bool
     */
    public function supports(Request $request, ArgumentMetadata $argument)
    {
       return true;
    }

    /**
     * Returns the possible value(s).
     *
     * @param Request $request
     * @param ArgumentMetadata $argument
     *
     * @return \Generator
     */
    public function resolve(Request $request, ArgumentMetadata $argument)
    {
        $className = $argument->getType();
        yield new $className();
    }
}