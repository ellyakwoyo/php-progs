<?php

class Car {
    private $make;
    private $model;
    private $year;

    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
        echo "A new car is created: {$this->make} {$this->model} ({$this->year})\n";
    }

    public function startEngine() {
        echo "{$this->make} {$this->model} engine started.\n";
    }

    public function drive() {
        echo "{$this->make} {$this->model} is being driven.\n";
    }

    public function __destruct() {
        echo "The car {$this->make} {$this->model} ({$this->year}) is being destructed.\n";
    }
}

// Creating Car objects
$car1 = new Car('Toyota', 'Camry', 2022);
$car2 = new Car('Honda', 'Civic', 2023);

// Using the car objects
$car1->startEngine();
$car1->drive();
$car2->startEngine();
$car2->drive();

?>
