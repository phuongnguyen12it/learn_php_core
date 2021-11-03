<?php

namespace IOC;

class Square implements Shape
{

    private $size;

    public function __construct($size)
    {
        $this->size = $size;
    }

    public function getPerimeter()
    {
        return $this->size * 4;
    }

    public function getArea()
    {
        return pow($this->size, 2);
    }

}
