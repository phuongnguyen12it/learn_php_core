<?php

namespace IOC;

class ShapeManager
{

    private $shape;

    public function setShape(Shape $shape)
    {
        $this->shape = $shape;
    }

    public function calculatePerimeter()
    {
        return $this->shape->getPerimeter();
    }

    public function calculateArea()
    {
        return $this->shape->getArea();
    }

}