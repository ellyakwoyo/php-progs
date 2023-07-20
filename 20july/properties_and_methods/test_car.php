

<?php

//Using the car class

require_once('car.php');

// Create Car objects
$car1 = new Car('Toyota', 'Camry', 2022, 'Red');
$car2 = new Car('Honda', 'Civic', 2021, 'Blue');

// Start and stop the cars
$car1->start();
$car2->start();

$car1->stop();
$car2->stop();

$car1->stop(); // Trying to stop the already stopped car

// Honk the horn
$car1->honk();
$car2->honk();
?>