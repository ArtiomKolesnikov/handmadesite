<?php

class DB
{
    public static function getConnection()
    {
        $config_db = include_once ROOT . 'app/config/database.php';
        return new PDO("mysql:host={$config_db['host']};dbname={$config_db['db_name']}"
        ,$config_db['user_name'], $config_db['password']);
    }
}