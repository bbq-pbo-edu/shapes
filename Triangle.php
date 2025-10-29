<?php

class Triangle extends Shape
{
    private float $base;
    private float $height;

    public function __construct(float $base, float $height)
    {
        $this->base = $base;
        $this->height = $height;
    }

    public function getBase(): float
    {
        return $this->base;
    }

    public function getHeight(): float
    {
        return $this->height;
    }

    public function getArea(): float
    {
        return 0.5 * $this->base * $this->height;
    }
}