<?php

class Renderer
{
    private $container;

    public static function render(string $path, array $variables = [])
    {
        extract($variables);
        ob_start();
        require_once("views/" . $path . '.html.php');
        $container = ob_get_clean();
        require_once("views/layouts.html.php");
    }
}
