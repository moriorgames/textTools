<?php

namespace AppBundle\Entity;


interface CarInterface
{
    /**
     * constant
     */
    const WHEELS = 4;

    /**
     * Only method signature
     * @return mixed
     */
    public function getFuel();

}
