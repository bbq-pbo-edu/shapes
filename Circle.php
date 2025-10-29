<?php

class Circle extends Shape
{
    private float $radius;

    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }

    public function getRadius(): float
    {
        return $this->radius;
    }

    public function getArea(): float
    {
        return $this->radius * M_PI ** 2;
    }

    public function getPerimeter(): float
    {
        return 2 * M_PI * $this->radius;
    }
}