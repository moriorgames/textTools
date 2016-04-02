<?php

namespace AppBundle\Entity;

/**
 * Class Animal
 * @package AppBundle\Entity
 */
abstract class Animal
{
    private $weight;

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param mixed $weight
     *
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    abstract public function eat();

}
