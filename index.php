<?php
require "./vendor/autoload.php";

$car = new \App\Car;
$car->accelerate();

echo "Car speed: {$car->speed}\n";
