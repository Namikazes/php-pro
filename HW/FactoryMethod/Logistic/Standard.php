<?php

namespace HW\FactoryMethod\Logistic;

class Standard implements Transport
{
    public function modelCar(): void
    {
        d("Model: Toyota Camry ");
    }
    public function priceCar(): void
    {
        d("Price : 125 ₴ ");
    }
}