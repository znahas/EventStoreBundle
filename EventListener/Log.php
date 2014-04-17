<?php
namespace Elcweb\EventStoreBundle\EventListener;

use Doctrine\ORM\EntityManager;
use Symfony\Bridge\Monolog\Logger;
use Symfony\Component\EventDispatcher\GenericEvent;

class Log extends BaseEventListener
{
    public function onEvent(GenericEvent $event)
    {
        $user = 'api';

        $this->logger->info("Event: [" . $user . "] " . $event->getName());
    }
}
