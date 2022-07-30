<?php

namespace controllers;

use Config\ConfigUtils;
use Http;

class ControllerLogin extends Controller
{
    protected $modelName = \Models\User::class;

    public function index()
    {
        $title = "Connexion";
        \Renderer::render("users/index", compact('title'));
    }

    public function connexion()
    {
        extract($_POST);
        if ($this->model->login($userName, $userPassword) === true) {
            ConfigUtils::message("Votre session est démarrer", "success");
            Http::redirect("index.php?controller=home");
        }
        $this->index();
        exit();
    }

    public function logout()
    {
        session_destroy();
        Http::redirect("index.php?controller=login");
    }
}
