<?php

require_once __DIR__ . '/vendor/autoload.php';

interface BirdFeed
{
    public function eat();
}

interface BirdFly
{
    public function fly();
}

class Swallow implements BirdFeed, BirdFly
{
    public function eat() { ... }
    public function fly() { ... }
}

class Ostrich implements BirdFeed
{
    public function eat() { ... }
}