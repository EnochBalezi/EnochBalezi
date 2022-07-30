<?php

namespace controllers;

abstract class Controller
{
    protected $modelName;
    protected $model;

    public function __construct()
    {
        $this->model = new $this->modelName();
    }

    public function message(string $message, string $type)
    {
        return "<div class='alert alert-" . $type . "'>
            <strong>" . $message . "<strong>
        </div>";
    }
}
