<?php

namespace IOC;

class Circle implements Shape {

    const PI = 3.1415;
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function getPerimeter() {
        return $this->radius * 2 * self::PI;
    }

    public function getArea() {
        return (float) (pow($this->radius, 2) * self::PI);
    }

}