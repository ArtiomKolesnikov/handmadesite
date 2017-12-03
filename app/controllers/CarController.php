<?php

class CarController
{
    public function carList()
    {
        require_once ROOT . 'app/views/car/allCars.php';
        return true;
    }
}