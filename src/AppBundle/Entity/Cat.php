<?php

namespace AppBundle\Entity;

/**
 * Class Cat
 * @package AppBundle\Entity
 */
class Cat extends Animal
{
    public function eat()
    {
        return 'Cats loves to eat Tuna';
    }
}
