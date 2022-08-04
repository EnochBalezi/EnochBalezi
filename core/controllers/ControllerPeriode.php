<?php

namespace controllers;

use Http;
use Renderer;

class ControllerPeriode extends Controller
{
    protected $modelName = \Models\Periode::class;

    public function index()
    {
        $title = "Période";
        $periodes = $this->model->findAll();
        Renderer::render("periodes/index", compact('title', 'periodes'));
    }

    public function save()
    {
        $this->model->enregistrer($_POST);
        $this->message("Période identifiée avec success", "success");
        Http::redirect("index.php?controller=periode ");
        exit;
    }
}
