<?php
require_once 'vendor/autoload.php';

$niva = new \App\Classes\Car(90, App\Classes\Car::TYPE_TRANSMISSION_MECHANIC);
$niva->move(200, 20, App\Classes\Car::DIRECTION_FORWARD);
$niva->move(50, 5, App\Classes\Car::DIRECTION_BACKWARD);