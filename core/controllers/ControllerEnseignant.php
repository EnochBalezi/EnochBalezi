<?php

namespace Controllers;

use Config\ValidationEnseignant;
use Http;
use Renderer;

class ControllerEnseignant extends Controller
{
    protected $modelName = \Models\Enseignant::class;


    public function index()
    {
        $title = "Enseignants";
        $enseignants = $this->model->findAll();
        Renderer::render("enseignants/index", compact("title", "enseignants"));
    }

    /**
     * Formulaire pour l'identification
     *
     * @return void
     */
    public function new()
    {
        $title = "New Enseignants";
        Renderer::render("enseignants/create", compact("title"));
    }

    /**
     * Identification
     *
     * @return void
     */
    public function save()
    {
        $validation = ValidationEnseignant::validate($_POST);
        if ($validation) {
            $this->message("", "");
            $this->new();
        } else {
            $this->model->enregistrer($_POST);
            Http::redirect("index.php?controller=enseignant&id=2");
            exit;
        }
    }

    /**
     * Formulaire pour la modification
     *
     * @return void
     */
    public function editEnseign()
    {
        $title = "Edit Enseignant";
        extract($_POST);
        $enseignant = $this->model->findById("matricule", $matricule);
        Renderer::render("enseignants/edit", compact("title", "enseignant"));
    }

    /**
     * Modification
     *
     * @return void
     */
    public function edit()
    {
        $validation = ValidationEnseignant::validate($_POST);
        if ($validation) {
            $this->message("", "");
            $this->editEnseign();
        } else {
            $this->model->modifier($_POST);
            Http::redirect("index.php?controller=enseignant&id=2");
            exit;
        }
    }
    /**
     * Suppression
     *
     * @return void
     */
    public function delete()
    {
        extract($_POST);
        $this->model->supprimer($matricule);
        Http::redirect("index.php?controller=enseignant");
        exit;
    }

    public function recherche()
    {
        extract($_POST);
        $enseignants = $this->model->searchEnseignant($searchData);
        $title = "Recherche";
        Renderer::render("enseignants/search", compact("title", "enseignants"));
    }
}
