<?php

namespace Controllers;

\Config\ConfigUtils::verifyToken();

class ControllerHome extends Controller
{
    protected $modelName = \Models\Home::class;

    public function index()
    {
        $title = "Home";
        $cptgEleve = $this->model->countEleves();

        \Renderer::render("home/index", compact('title', 'cptgEleve', 'cptgClasse'));
    }
}
