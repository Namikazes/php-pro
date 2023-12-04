<?php

namespace HW\FactoryMethod\Logistic;

class LuxLogistic extends Logistic
{
    public function getTransport(): Transport
    {
        return new Lux();
    }
}