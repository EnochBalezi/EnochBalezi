<?php

namespace Models;

class Rapports extends Model
{
    protected $table = "affichageCursus";

    public function viewAnnees()
    {
        return $this->find("SELECT * from annees");
    }

    public function viewOptions()
    {
        return $this->find("SELECT * from promotions");
    }

    public function listElevePromotion($matricule, $annee)
    {
        return $this->find("SELECT * from affichageCursus WHERE designation='$matricule' AND annee='$annee' ");
    }
}
