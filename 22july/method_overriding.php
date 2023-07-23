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
        echo "Moving the {$this->make} {$this->model}\n";
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

// Creating objects
$car = new Car('Toyota', 'Camry');
$motorcycle = new Motorcycle('Harley', 'Davidson');

// Using the objects with method overriding
$car->startEngine(); // Calls the Car class's startEngine method
$car->drive();       // Calls the Car class's drive method

$motorcycle->startEngine(); // Calls the Motorcycle class's startEngine method
$motorcycle->ride();        // Calls the Motorcycle class's ride method

?>
