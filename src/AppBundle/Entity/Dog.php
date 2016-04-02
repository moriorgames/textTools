<?php

namespace AppBundle\Entity;

/**
 * Class Dog
 * @package AppBundle\Entity
 */
class Dog extends Animal
{
    public function eat()
    {
        return 'Dogs loves to eat Chicken';
    }
}
