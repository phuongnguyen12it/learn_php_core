<?php

namespace IOC;

require_once (__DIR__.'/ShapeManager.php');
require_once (__DIR__.'/Shape.php');
require_once (__DIR__.'/Circle.php');
require_once (__DIR__.'/Square.php');

function main()
{
    $circle = new Circle(1);
    $square = new Square(4);
    $shapeManager = new ShapeManager();
    $shapeManager->setShape($circle);
    echo "S: ".$shapeManager->calculateArea() . " -- V: " . $shapeManager->calculatePerimeter(). "<br/>";
    $shapeManager->setShape($square);
    echo "S: ".$shapeManager->calculateArea() . " -- V: " . $shapeManager->calculatePerimeter(). "<br/>";
}