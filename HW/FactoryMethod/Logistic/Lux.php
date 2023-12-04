<?php

namespace HW\FactoryMethod\Logistic;

class Lux implements Transport
{
    public function modelCar(): void
    {
        d("Model: Mercedes-Benz S600 ");
    }
    public function priceCar(): void
    {
        d("Price : 350 ₴ ");
    }
}