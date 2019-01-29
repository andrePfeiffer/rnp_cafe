<?php

namespace Drupal\rnp_cafe\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\rnp_cafe\cafe\RoarGenerator;
use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Logger\

class HelloWorld extends ControllerBase
{
    private $roarGenerator;
    private $loggerFactoryService;

    public function __construct (RoarGenerator $roarGenerator, LoggerChannelFactoryInterface $loggerFactory)
    {
        $this->roarGenerator = $roarGenerator;
    }
    public function ola($count)
    {
        $saida = $this->roarGenerator->getRoar($count);
        return new Response($saida);
    }

    public static function create(ContainerInterface $container)
    {
        $roarGenerator = $container->get('rnp_cafe.roar_generator');
        $loggerFactory = $container->get('logger.factory');
        return new static($roarGenerator, $loggerFactory);
    }
}