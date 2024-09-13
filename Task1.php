<?php

// Base class for Shape
class Shape {
    public function area() {
        // To be overridden in subclasses
        return 0;
    }
}

// Circle class extending Shape
class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    // Overriding the area method for Circle
    public function area() {
        return pi() * pow($this->radius, 2);
    }
}

// Rectangle class extending Shape
class Rectangle extends Shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    // Overriding the area method for Rectangle
    public function area() {
        return $this->width * $this->height;
    }
}

// Testing the classes
$circle = new Circle(5);
echo "Area of Circle: " . $circle->area() . "\n";  // Output: Area of Circle: 78.54

$rectangle = new Rectangle(4, 6);
echo "Area of Rectangle: " . $rectangle->area() . "\n";  // Output: Area of Rectangle: 24
?>
