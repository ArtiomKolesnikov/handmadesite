<?php
include_once ROOT . 'app/models/Car.php';
class CarController
{
    public function carList()
    {
        $cars = Car::getCarsList();
        require_once ROOT . 'app/views/car/allCars.php';
        return true;
    }
}