<?php
/**
 * Created by PhpStorm.
 * User: programmer_5
 * Date: 05.02.2019
 * Time: 10:30
 */

namespace App\Controller;


use App\Menu\Menu;
use App\Product\Product;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{


    /**
     * @param Menu $menu
     * @return Response
     * @Route("/")
     */
    public function index(Menu $menu){
        return new Response('erfwe');
    }

}