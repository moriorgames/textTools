<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Controller used to manage homepage pages in the public part of the site.
 *
 * @Route("/")
 *
 * @author Morior <moriorgames@gmail.com>
 */
class DefaultController extends Controller
{
    /**
     * @Route("/", name="app_homepage")
     */
    public function indexAction()
    {
        return $this->render(':default:index.html.twig');
    }
}
