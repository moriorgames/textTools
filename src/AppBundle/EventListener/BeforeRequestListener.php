<?php

namespace AppBundle\EventListener;

use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;

class BeforeRequestListener
{
    /**
     * @param EntityManager $em
     */
    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    /**
     * Add the filters globally
     *
     * @param GetResponseEvent $event
     */
    public function onKernelRequest(GetResponseEvent $event)
    {
        $filter = $this->em
            ->getFilters()
            ->enable('fortune_cookie_discontinued');
        $filter->setParameter('discontinued', false);
    }
}