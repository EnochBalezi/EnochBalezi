<?php

namespace controllers;

use Config\EntityNotValidException;
use Config\ValidationEleve;

\Config\ConfigUtils::verifyToken();

use Http;
use Renderer;

class ControllerEleve extends Controller
{
    protected $modelName = \Models\Eleve::class;


    public function index()
    {
        $title = "Elèves";
        $listEleves = $this->model->findAll();
        \Renderer::render("eleves/index", compact('title', 'listEleves'));
    }
    public function new()
    {
        $title = "Elèves";
        \Renderer::render("eleves/create", compact('title'));
    }

    public function create()
    {
        try {
            $validation = ValidationEleve::validate($_POST);
            if ($validation) {
                Renderer::render('eleves/create', compact('validation'));
                exit();
            } else {
                $this->model->enregistrer($_POST);
                $message = $this->message("Identification de l'élève effectué avec succés", "success");
                Http::redirect("index.php?controller=eleve", compact('message'));
                exit();
            }
        } catch (EntityNotValidException $ex) {
            $ex->getMessage();
        }
    }

    public function editEleve()
    {
        extract($_POST);
        $title = "Modifier un Elève";
        $eleve = $this->model->eleveById($matricule);
        \Renderer::render("eleves/edit", compact('title', 'eleve'));
    }

    public function edit()
    {
        try {
            $validation = ValidationEleve::validate($_POST);
            if ($validation) {
                Renderer::render('eleves/create', compact('validation'));
            } else {
                if ($_SESSION['autherized'] === "Admin") {
                    $this->model->modifier($_POST);
                    $message = $this->message("Modification de l'élève effectué avec succés", "success");
                    Http::redirect("index.php?controller=eleve", compact('message'));
                    exit();
                }
            }
        } catch (EntityNotValidException $ex) {
            $ex->getMessage();
        }
    }

    public function deleteEleve()
    {
        try {
            extract($_POST);
            if ($matricule == null) {
                $message = $this->message("", "");
                Http::redirect("index.php?controller=eleve", compact('message'));
            } else {
                $this->model->supprimer($matricule);
                $message = $this->message("Suppression de l'élève effectué avec succés", "success");
                exit();
                Http::redirect("index.php?controller=eleve", compact('message'));
            }
        } catch (EntityNotValidException $ex) {
            $ex->getMessage();
        }
    }

    public function recherche()
    {
        extract($_POST);
        if ($searchDate === null) {
            $message = $this->message("", "warning");
        } else {
            $dataSearch = $this->model->searchEleve($searchDate);
            Renderer::render("eleves/search", compact('dataSearch'));
            exit();
        }
    }
}
