<?php

namespace controllers;

use Config\ValidationPromotion;
use Renderer;

\Config\ConfigUtils::verifyToken();

class ControllerPromotion extends Controller
{
    protected $modelName = \Models\Promotion::class;

    public function index()
    {
        $title = "Promotions";
        $promotions = $this->model->findAll();
        Renderer::render("promotions/index", compact('title', 'promotions'));
    }

    public function new()
    {
        $title = "New Promotion";
        Renderer::render("promotions/create", compact('title', 'promotions'));
    }

    public function save()
    {
        $validation = ValidationPromotion::validate($_POST);
        if ($validation) {
            $this->index();
            exit();
        } else {
            $this->model->enregistrer($_POST);
            $this->index();
            exit();
        }
    }

    public function editProm()
    {
        extract($_POST);
        $title = "Modifier";
        $promotion = $this->model->promotionById($codePromotion);
        Renderer::render("promotions/edit", compact('title', 'promotion'));
        exit();
    }

    public function edit()
    {
        $validation = ValidationPromotion::validate($_POST);
        if ($validation) {
            $this->index();
            exit();
        } else {
            $this->model->modifier($_POST);
            $this->index();
            exit();
        }
        $this->index();
    }

    public function delProm()
    {
        extract($_POST);
        if (@$codePromotion === null) {
            $message = $this->message("Echec, vous devez préciser élèment à supprimer svp!", "warning");
        } else {
            $this->model->supprimer($codePromotion);
            $this->index();
            exit();
        }
        $this->index();
    }

    public function search()
    {
        $title = "Recherche";
        extract($_POST);
        $searchData = $this->model->recherche($designation);
        Renderer::render("promotions/search", compact('title', 'searchData'));
        exit();
    }
}
