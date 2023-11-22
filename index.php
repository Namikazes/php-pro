<?php

require_once __DIR__ . '/vendor/autoload.php';

class Color
{
    public function __construct(
        private int $red,
        private int $green,
        private int $blue)
    {
        $this->setRed($red);
        $this->setGreen($green);
        $this->setBlue($blue);
    }

    public function getRed()
    {
        return $this->red;
    }

    public function setRed($red)
    {
        $this->validColor($red);

        $this->red = $red;
    }

    public function getGreen()
    {
        return $this->green;
    }

    public function setGreen($green)
    {
        $this->validColor($green);

        $this->green = $green;
    }

    public function getBlue()
    {
        return $this->blue;
    }

    public function setBlue($blue)
    {
        $this->validColor($blue);

        $this->blue = $blue;
    }

    private function validColor($value)
    {
        if($value < 0 || $value > 255) {
           throw new InvalidArgumentException("Error value validation!!!");
        }
    }

    public function equals(Color $otherColor)
    {
        return $this->red === $otherColor->getRed()
            && $this->green === $otherColor->getGreen()
            && $this->blue === $otherColor->getBlue();
    }

    public static function random() {
        $red = rand(0,255);
        $green = rand(0,255);
        $blue = rand(0,255);

        return new self($red, $green, $blue);
    }

    public function mix(Color $otherColor)
    {
        $mixedRed = ($this->red + $otherColor->getRed()) / 2;
        $mixedGreen = ($this->green + $otherColor->getGreen()) / 2;
        $mixedBlue = ($this->blue + $otherColor->getBlue()) / 2;

        return new self($mixedRed, $mixedGreen, $mixedBlue);
    }

}

$color = new Color(250, 250, 250);
$otherColor = new Color(250, 250, 250);
$mixedColor = $color->mix(new Color(100, 100, 100));
d($mixedColor->getRed()); // 175
d($mixedColor->getGreen()); // 175
d($mixedColor->getBlue()); // 175

$randomColor = $color->random();
d($randomColor->getRed());
d($randomColor->getGreen());
d($randomColor->getBlue());

$equalsColor = $color->equals($randomColor);
d($equalsColor);
$equalsColor = $color->equals($otherColor);
d($equalsColor);