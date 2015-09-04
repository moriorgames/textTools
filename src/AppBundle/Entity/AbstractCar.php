<?php

namespace AppBundle\Entity;

abstract class AbstractCar
{
    const TOP_SPEED = 180;

    /**
     * @var string
     */
    private $name = '';

    /**
     * Abstract method must be public
     *
     * @return mixed
     */
    abstract public function getName();

    /**
     * Can have protected methods
     */
    protected function wheel()
    {
        $this->engine();
    }

    /**
     * Can have private methods
     */
    private function engine()
    {
        $this->name .= ' 2000cc';
    }

}
