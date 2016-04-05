<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Solid\Circle;
use AppBundle\Entity\Solid\Rectangle;
use AppBundle\Entity\Solid\RectangleView;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Class SOLIDController
 * Controller about to explain the SOLID principles
 *
 * @Route("/solid/")
 *
 * @author Morior <moriorgames@gmail.com>
 * @package AppBundle\Controller
 */
class SolidController extends Controller
{
    /**
     * This is an example of how you have to implement
     * Abstract Classes on PHP
     *
     * @Route("", name="solid_index")
     * @return Response
     */
    public function indexAction()
    {
        $srpRoute = $this->generateUrl('solid_srp');
        $text = <<< TEXT
<ul>
<li><h1>List of SOLID principles</h1></li>
<li><a href="$srpRoute">SRP: The Single ResponsibilityPrinciple</a></li>
</ul>
TEXT;

        return new Response($text);
    }

    /**
     * This is an example of how you have to implement
     * Abstract Classes on PHP
     *
     * @Route("srp", name="solid_srp")
     * @return Response
     */
    public function singleResponsibilityPrincipleAction()
    {
        $text = <<< TEXT
<ul>
<li><h1>SRP: The Single Responsibility Principle</h1></li>
<li><h2>A CLASS SHOULD HAVE ONLY ONE REASON TO CHANGE.</h2></li>
<li>Imagine we have 2 sets of classes about geometrical stuff.
 We have <b>circle</b> with area and draw method and in the other hand we have
   a <b>Rectangle</b> with the are method and the <b>RectangleView</b> with the draw method separated</li>
<li>The Rectangle set can be managed more easily because each class has only one reason to change.</li>
</ul>
TEXT;

        dump(new Circle, new Rectangle, new RectangleView);

        return new Response($text);
    }
}
