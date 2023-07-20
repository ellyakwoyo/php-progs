

<?php
//Car class

class Car {
    // Properties (attributes)
    private $brand;
    private $model;
    private $year;
    private $color;
    private $isStarted;

    // Constructor to initialize the object with provided data
    public function __construct($brand, $model, $year, $color) {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
        $this->color = $color;
        $this->isStarted = false;
    }

    // Method to start the car
    public function start() {
        if (!$this->isStarted) {
            $this->isStarted = true;
            echo "The {$this->brand} {$this->model} has been started.<br>";
        } else {
            echo "The car is already started.<br>";
        }
    }

    // Method to stop the car
    public function stop() {
        if ($this->isStarted) {
            $this->isStarted = false;
            echo "The {$this->brand} {$this->model} has been stopped.<br>";
        } else {
            echo "The car is already stopped.<br>";
        }
    }

    // Method to honk the car horn
    public function honk() {
        echo "Beep! Beep! The {$this->brand} {$this->model} is honking its horn.<br>";
    }
}
?>