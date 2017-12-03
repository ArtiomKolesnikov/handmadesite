<?php

class Car
{
    public static function getCarsList()
    {
        $db = DB::getConnection();
        $categories = $db->query("SELECT * FROM cars;");
        $categories->setFetchMode(PDO::FETCH_ASSOC);
        return $categories->fetchAll();
    }
}