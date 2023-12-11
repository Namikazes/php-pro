<?php

namespace HW\FactoryMethod\Logistic;

class EconomLogistic extends Logistic
{
    public function getTransport(): Transport
    {
       return new Econom();
    }
}