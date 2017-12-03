<?php

//FRONT CONTROLLER

// 1. Общие настройки*************************

//включение отображения ошибок во время разработки (потом выключить)
ini_set('display_errors',1);
error_reporting(E_ALL);

// 2. Подключение файлов системы*************************

define('ROOT', dirname(__FILE__) . '/');
require_once (ROOT . 'app/components/Router.php');
require_once ROOT . 'app/components/DB.php';



// 3. БД*************************

//$con = mysqli_connect($config_db['host'],$config_db['user_name'],$config_db['password'],$config_db['db_name']);
//mysqli_set_charset($con,'utf8');
//if(mysqli_connect_errno()){
//    echo "Failed connect to DB " . mysqli_connect_error();
//}





// 4. Router*************************

$router = new Router;
$router->run();