<?php

namespace AppBundle\Entity;

/**
 * Difference between abstract class and interface:
 * =================================================================================
 * Interface is a contract, abstract is an inheritance class, like normal classes.
 * Neither, Abstract or Interface classes canNOT be instantiated.
 * A PHP class can extend only one class but can implement several classes.
 * In the abstract class, the abstract method defined, must be public and must be implemented by the child.
 * All the methods of the Interface must be public and must be implemented by the child.
 * The Abstract class can have some methods, private, protected, members.
 * The Interface can has only public methods and constants.
 * =================================================================================
 */

/**
 * Class Car
 * @package AppBundle\Controller
 */
class Car extends AbstractCar implements CarInterface
{

    public function getName()
    {
        return 'Bongo botrako';
    }

    public function getFuel()
    {
        // TODO: Implement getFuel() method.
    }


}