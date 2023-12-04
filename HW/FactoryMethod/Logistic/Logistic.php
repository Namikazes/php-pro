<?php

namespace HW\FactoryMethod\Logistic;

abstract class Logistic
{
    abstract public function getTransport(): Transport;

    public function getInfoTransport():void
    {
        $transport = $this->getTransport();
        $transport->modelCar();
        $transport->priceCar();
    }
}