<?php

abstract class Shape {
    abstract public function calculateArea();
}

class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return 3.14 * $this->radius * $this->radius;
    }
}

class Square extends Shape {
    private $side;

    public function __construct($side) {
        $this->side = $side;
    }

    public function calculateArea() {
        return $this->side * $this->side;
    }
}

class Triangle extends Shape {
    private $base;
    private $height;

    public function __construct($base, $height) {
        $this->base = $base;
        $this->height = $height;
    }

    public function calculateArea() {
        return 0.5 * $this->base * $this->height;
    }
}

// Function to calculate the total area of an array of shapes
function calculateTotalArea(array $shapes) {
    $totalArea = 0;
    foreach ($shapes as $shape) {
        $totalArea += $shape->calculateArea();
    }
    return $totalArea;
}

// Create shapes
$circle = new Circle(5);
$square = new Square(7);
$triangle = new Triangle(4, 6);

// Calculate the areas of individual shapes
echo "Area of Circle: " . $circle->calculateArea() . "\n";
echo "Area of Square: " . $square->calculateArea() . "\n";
echo "Area of Triangle: " . $triangle->calculateArea() . "\n";

// Create an array of shapes
$shapes = [$circle, $square, $triangle];

// Calculate the total area of all shapes using polymorphism
$totalArea = calculateTotalArea($shapes);
echo "Total Area of all Shapes: " . $totalArea . "\n";
?>