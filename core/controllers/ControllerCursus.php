<?php

namespace controllers;

use Config\EntityNotFoundException;
use Config\EntityNotValidException;
use Config\ValidationCursus;
use Http;
use Renderer;

class ControllerCursus extends Controller
{
    protected $modelName = \Models\Cursus::class;

    public function index()
    {
        $title = "Cursus";

        $cursus = $this->model->viewCursus();

        Renderer::render("cursus/index", compact('title', 'cursus', 'annees', 'options'));
    }

    public function  recherche()
    {
        extract($_POST);
        $title = "Search";
        $searchData = $this->model->cursusSearch($searchDate);
        Renderer::render("cursus/search", compact('searchData', 'title'));
    }

    public function editCursus()
    {
        $title = "Modifier le Cursus";
        extract($_POST);
        $options = $this->model->viewOptions();
        $annees = $this->model->viewAnnees();
        $cursus = $this->model->cursusById($matricule);

        Renderer::render("cursus/edit", compact('cursus', 'title', 'annees', 'options'));
    }

    public function new()
    {
        $title = "Nouveau Cursus";
        extract($_POST);
        $options = $this->model->viewOptions();
        $annees = $this->model->viewAnnees();
        $eleves = $this->model->viewEleves();
        Renderer::render("cursus/create", compact('eleves', 'title', 'annees', 'options'));
    }

    public function save()
    {
        try {
            $validation = ValidationCursus::validate($_POST);
            if ($validation) {
            } else {
                $this->model->enregistrer($_POST);
                $this->index();
            }
        } catch (EntityNotFoundException $ex) {
            $ex->getMessage();
        }
    }

    public function edit()
    {
        try {
            $validation = ValidationCursus::validate($_POST);
            if ($validation) {
                Renderer::render('cursus/index', compact('validation'));
            } else {
                $this->model->modifier($_POST);
                $message = $this->message("Modification du effectué avec succés", "success");
                Http::redirect("index.php?controller=cursus");
            }
        } catch (EntityNotValidException $ex) {
            $ex->getMessage();
        }
    }
    public function deleteCursus()
    {
        try {
            extract($_POST);
            if ($matricule == null) {
                $message = $this->message("", "");
                Http::redirect("index.php?controller=eleve", compact('message'));
            } else {
                $this->model->supprimer($matricule);
                $message = $this->message("Suppression de l'élève effectué avec succés", "success");
                Http::redirect("index.php?controller=cursus", compact('message'));
            }
        } catch (EntityNotValidException $ex) {
            $ex->getMessage();
        }
    }
}
