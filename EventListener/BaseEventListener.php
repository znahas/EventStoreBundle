<?php
namespace Elcweb\EventStoreBundle\EventListener;

use JMS\Serializer\Serializer;
use Symfony\Bridge\Monolog\Logger;
use Symfony\Component\EventDispatcher\GenericEvent;
use Symfony\Component\Security\Core\SecurityContext;

class BaseEventListener
{
    protected $logger;
    protected $serializer;
    protected $security;

    public function __construct(Logger $logger, Serializer $serializer, SecurityContext $security)
    {
        $this->logger     = $logger;
        $this->serializer = $serializer;
        $this->security   = $security;
    }

    public function onEvent(GenericEvent $event)
    {

    }
}
