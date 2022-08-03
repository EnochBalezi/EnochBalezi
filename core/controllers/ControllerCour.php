<?php

namespace controllers;

use Config\ValidationCour;
use Renderer;

class ControllerCour extends Controller
{
    protected $modelName = \Models\Cour::class;

    public function index()
    {
        $title = "Cours";

        $cours = $this->model->affichageCours();
        Renderer::render("cours/index", compact("title", "cours"));
    }

    public function new()
    {
        $title = "New Cours";
        $promotions = $this->model->affichagePromotions();
        $enseignants = $this->model->affichageEnseignants();
        Renderer::render("cours/create", compact("title", "promotions", "enseignants", "message"));
    }

    public function save()
    {
        $validation = ValidationCour::validate($_POST);

        if ($validation) {
            $_SESSION['message'] = $validation;
            $this->new();
            exit;
        } else {
            $this->model->enregistrer($_POST);
            $_SESSION['message'] = $validation;
            $this->index();
            exit;
        }
    }

    public function editCour()
    {
        extract($_POST);
        $title = "Edit Cours";
        $promotions = $this->model->affichagePromotions();
        $enseignants = $this->model->affichageEnseignants();
        $cours = $this->model->courById($codeCours);
        Renderer::render("cours/edit", compact("title", "cours", "promotions", "enseignants", "message"));
    }

    public function edit()
    {
        $validation = ValidationCour::validate($_POST);

        if ($validation) {
            $message = $validation;
            $this->editCour();
            exit;
        } else {
            $this->model->modifier($_POST);
            $_SESSION['message'] = $validation;
            $this->index();
            exit;
        }
    }

    public function deleteCour()
    {
        extract($_POST);
        $this->model->supprimer($codeCours);
        $this->index();
        exit;
    }

    public function recherche()
    {
        $title = "Recherche Cours";
        extract($_POST);
        $search = $this->model->rechercheCours($searchData);
        Renderer::render("cours/search", compact('title', 'search'));
    }
}
