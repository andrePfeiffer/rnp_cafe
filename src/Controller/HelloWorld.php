<?php

namespace Drupal\rnp_cafe\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\rnp_cafe\cafe\RoarGenerator;
use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Logger\LoggerChannelFactoryInterface;

class HelloWorld extends ControllerBase
{
    private $roarGenerator;
    private $loggerFactoryService;

    public function __construct (RoarGenerator $roarGenerator, LoggerChannelFactoryInterface $loggerFactoryervice)
    {
        $this->roarGenerator = $roarGenerator;
        $this->loggerFactoryService = $loggerFactoryervice;
    }
    public function ola($count)
    {
        $saida = $this->roarGenerator->getRoar($count);
        $this->loggerFactoryService->get('default')->debug($saida);
        return new Response($saida);
    }

    public static function create(ContainerInterface $container)
    {
        $roarGenerator = $container->get('rnp_cafe.roar_generator');
        $loggerFactory = $container->get('logger.factory');
        return new static($roarGenerator, $loggerFactory);
    }
}