<?php

/**
 * Class Router
 * main class for other routers
 */
class Router
{
    private $routes;

    /**
     * @return bool|string
     */
    private function getUri()
    {
        if(!empty($_SERVER['REQUEST_URI']))
        {
            return trim($_SERVER['REQUEST_URI'],'/');
        }
        return false;
    }

    public function __construct()
    {
        $routesPath = ROOT . 'app/config/routes.php';
        $this->routes = include $routesPath;
    }

    public function run()
    {
        // получить строку запроса
        $uri = $this->getUri();

        // проверить наличие такого запроса в routes.php
        foreach ($this->routes as $uriPattern => $path)
        {
            // если есть совпадение то определить какой контроллер и action нужны
            if(preg_match("~$uriPattern~",$uri))
            {
                //получаем внутренний путь согласно правилу
                $internalRoute = preg_replace("~$uriPattern~",$path,$uri);

                $segments = explode('@',$internalRoute);
                $controllerName = ucfirst(array_shift($segments));
                $actionName = ucfirst(array_shift($segments));
                $params = $segments;

                // подключить файл класса контроллера
                $controllerFile = ROOT . "app/controllers/$controllerName.php";
                if(file_exists($controllerFile))
                {
                    include_once $controllerFile;
                }

                // создать объект и вызвать action
                $controllerObject = new $controllerName;
//                echo '<pre>';
//
//                var_dump( $params);
//                echo '</pre>';
                $result = call_user_func_array([$controllerObject,$actionName],$params);
                if($result != null)
                {
                    break;
                }
            }
        }



    }
}