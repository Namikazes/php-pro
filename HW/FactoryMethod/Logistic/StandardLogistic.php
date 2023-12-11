<?php

namespace HW\FactoryMethod\Logistic;

class StandardLogistic extends Logistic
{
    public function getTransport(): Transport
    {
        return new Standard();
    }
}