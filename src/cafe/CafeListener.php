<?php

namespace Drupal\rnp_cafe\cafe;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;

class CafeListener implements EventSubscriberInterface
{
    public function onKernelRequest(GetResponseEvent $event)
    {
        //echo "I'm a human";

    }


    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::REQUEST => 'onKernelRequest',
        ];
    }
}