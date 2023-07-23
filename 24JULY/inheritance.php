<?php

class Vehicle {
    protected $make;
    protected $model;

    public function __construct($make, $model) {
        $this->make = $make;
        $this->model = $model;
    }

    public function startEngine() {
        echo "Starting the engine of {$this->make} {$this->model}\n";
    }

    public function move() {
        echo "{$this->make} {$this->model} is moving\n";
    }
}

class Car extends Vehicle {
    public function startEngine() {
        echo "Starting the engine of {$this->make} {$this->model} (Car)\n";
    }

    public function drive() {
        echo "{$this->make} {$this->model} is being driven (Car)\n";
    }
}

class Motorcycle extends Vehicle {
    public function startEngine() {
        echo "Starting the engine of {$this->make} {$this->model} (Motorcycle)\n";
    }

    public function ride() {
        echo "{$this->make} {$this->model} is being ridden (Motorcycle)\n";
    }
}

// Create a Car object
$car = new Car('Toyota', 'Camry');

// Accessing methods from the Car class
$car->startEngine(); // Output: Starting the engine of Toyota Camry (Car)
$car->drive();       // Output: Toyota Camry is being driven (Car)

// Create a Motorcycle object
$motorcycle = new Motorcycle('Harley', 'Davidson');

// Accessing methods from the Motorcycle class
$motorcycle->startEngine(); // Output: Starting the engine of Harley Davidson (Motorcycle)
$motorcycle->ride();        // Output: Harley Davidson is being ridden (Motorcycle)

// Accessing methods from the parent Vehicle class
$car->move();         // Output: Toyota Camry is moving
$motorcycle->move();  // Output: Harley Davidson is moving
?>