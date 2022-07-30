<?php

namespace controllers;

use Renderer;

\Config\ConfigUtils::verifyToken();

class ControllerRapports extends Controller
{
    protected $modelName = \Models\Rapports::class;

    public function index()
    {
        $title = "Rapports";
        $options = $this->model->viewOptions();
        $annees = $this->model->viewAnnees();
        Renderer::render("rapports/rapportEleve", compact('title', 'options', 'annees'));
    }

    public function rapportEleve()
    {
        $title = "Rapports";
        extract($_POST);
        $options = $this->model->viewOptions();
        $annees = $this->model->viewAnnees();
        $rapports = $this->model->listElevePromotion($promotion, $annee);
        Renderer::render("rapports/rapportEleve", compact('title', 'rapports', 'options', 'annees'));
        exit();
    }
}
