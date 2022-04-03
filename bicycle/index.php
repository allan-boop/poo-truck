<?php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';


$truck = new Truck('red', 4, 'electric', 100);
$truck1 = new Truck('blue', 4, 'fuel', 50);
echo $truck->load(50) . '<br>';
echo $truck1->load(25) . '<br>';
echo $truck->load(50) . '<br>';
echo $truck1->load(25) . '<br>';
echo $truck->load(50) . '<br>';
echo $truck1->load(25) . '<br>';
echo $truck->forward() . '<br>';
echo $truck1->forward() . '<br>';
echo $truck->brake() . '<br>';
echo $truck1->brake() . '<br>';

/*
$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);
*/
