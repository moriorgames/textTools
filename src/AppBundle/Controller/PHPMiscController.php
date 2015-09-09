<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Class MiscController
 * Controller with php useful solutions
 *
 * @Route("/php-misc/")
 *
 * @author Morior <moriorgames@gmail.com>
 * @package AppBundle\Controller
 */
class PHPMiscController extends Controller
{

    /**
     * Precedence sample with php difference between &&, and, ||, or
     *
     * @Route("precedence", name="app_precedence")
     * @return Response
     */
    public function precedenceAction()
    {
        dump('
        Precedence sample with php difference between &&, and, ||, or

        $var = 0;
        $a = $var += 1 && $var += 2; => 3
        $a = $var += 1 and $var += 2; => 1
        $a = $var += 2 || $var += 1; => 1
        $a = $var += 2 or $var += 1; => 2
        ');

        $var = 0;
        $a = $var += 1 && $var += 2;
        dump($a);


        $var = 0;
        $a = $var += 1 and $var += 2;
        dump($a);


        $var = 0;
        $a = $var += 2 || $var += 1;
        dump($a);


        $var = 0;
        $a = $var += 2 or $var += 1;
        dump($a);

        return new Response('');
    }
}
