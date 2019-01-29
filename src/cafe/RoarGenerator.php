<?php

namespace Drupal\rnp_cafe\cafe;

use Drupal\Core\KeyValueStore\KeyValueFactoryInterface;
use Drupal\Core\Logger\LoggerChannelFactoryInterface;


class RoarGenerator
{
    private $keyValueFactory;
    private $loggerFactoryervice;
    private $useCache;

    public function __construct(
        KeyValueFactoryInterface $keyValueFactory, 
        LoggerChannelFactoryInterface $loggerFactoryService, 
        $useCache)
    {
        $this->loggerFactoryervice = $loggerFactoryService;
        $this->keyValueFactory = $keyValueFactory;
        $this->useCache = $useCache;
    }

    public function getRoar($length)
    {
        $key = 'rnp_cafe_' . $length;
        $this->loggerFactoryervice->get('default')->debug($key);
        $store = $this->keyValueFactory->get('cafe');
        if($this->useCache && $store->has($key))
        {
            return $store->get($key);
        }
        else
        {
            sleep(2);
            $string = 'Ol' . str_repeat('a', $length) . ' mundo!';
            if($this->useCache){
                $store->set($key, $string);
            }

            return $string;
        }
        
    }
}