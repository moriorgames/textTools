<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Cat;
use AppBundle\Entity\Dog;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Class MiscController
 * Controller with php useful solutions
 *
 * @Route("/php-abstract/")
 *
 * @author Morior <moriorgames@gmail.com>
 * @package AppBundle\Controller
 */
class AbstractClassesController extends Controller
{

    /**
     * This is an example of how you have to implement
     * Abstract Classes on PHP
     *
     * @Route("sample", name="abstract_sample")
     * @return Response
     */
    public function sampleAction()
    {
        $cat = new Cat();
        $dog = new Dog();

        $cat->setWeight(12);
        $dog->setWeight(12);

        dump($cat->eat());
        dump($dog->eat());

        return new Response('');
    }
}
