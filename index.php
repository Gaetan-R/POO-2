<?php

require_once 'Vehicle.php';
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';


$bicycle = new Bicycle('blue', 1,2);
echo '<pre>';
echo $bicycle->forward();
var_dump($bicycle);

$car = new Car('green', 4, 4, 'electric');
echo '<pre>';
echo $car->forward();
var_dump($car);

var_dump(Car::ALLOWED_ENERGIES);

$truck = new Truck('silver',3,10,'fuel',100,10);
echo '<pre>';
echo $truck->forward();
echo '<pre>';
echo $truck->storageState();
echo '<pre>';
var_dump($truck);
