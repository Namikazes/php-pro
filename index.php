<?php

require_once __DIR__ . '/vendor/autoload.php';

use HW\FactoryMethod\Logistic\Logistic;
use HW\FactoryMethod\Logistic\EconomLogistic;
use HW\FactoryMethod\Logistic\StandardLogistic;
use HW\FactoryMethod\Logistic\LuxLogistic;

function clientCode(Logistic $logistic):void
{
    $logistic->getInfoTransport();
}

clientCode(new EconomLogistic());
clientCode(new StandardLogistic());
clientCode(new LuxLogistic());