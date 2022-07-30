<?php
session_start();

class Application
{
    public static function run()
    {
        $controllerName = "Login";
        $task = "index";

        if (!empty($_GET['controller'])) {
            $controllerName = ucfirst($_GET['controller']);
        }
        if (!empty($_GET['task'])) {
            $task = $_GET['task'];
        }
        $controllerName = "controllers\\Controller" . $controllerName;
        $controller = new $controllerName();
        $controller->$task();
    }
}
