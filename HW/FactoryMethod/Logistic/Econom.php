<?php

namespace HW\FactoryMethod\Logistic;

class Econom implements Transport
{
    public function modelCar(): void
    {
        d("Model: Renout Logan ");
    }
    public function priceCar(): void
    {
        d("Price : 75 ₴ ");
    }
}