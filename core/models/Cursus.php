<?php

namespace Models;

class Cursus extends Model
{
    protected $table = "Cursus";

    public function viewCursus()
    {
        return $this->find("SELECT * from affichageCursus");
    }

    public function viewAnnees()
    {
        return $this->find("SELECT * from annees");
    }

    public function viewOptions()
    {
        return $this->find("SELECT * from promotions");
    }

    public function viewEleves()
    {
        return $this->find("SELECT * from Eleves");
    }

    public function cursusSearch($data)
    {
        return $this->find("SELECT * from affichageCursus where matricule LIKE '%$data%' OR identite LIKE '%$data%' OR designation LIKE '%$data%'");
    }

    public function cursusById($matricule)
    {
        return $this->findById("matricule", $matricule);
    }

    public function enregistrer($data)
    {
        extract($data);
        $cursus = [$matriEleve, $anneSco, $codePromotion, $montantPaiement, $dateTransaction, $_SESSION['name']];
        return $this->persist(
            "INSERT INTO {$this->table} (matricule,annee,codePromotion,totalApayer,transactionDate,createdBy)VALUES(?,?,?,?,?,?)",
            $cursus
        );
    }

    public function modifier($data)
    {
        extract($data);
        $cursus = [
            $anneSco, $codePromotion, $montantPaiement, $dateTransaction, $_SESSION['name'], $matriEleve
        ];
        return $this->persist(
            "UPDATE {$this->table} SET annee=?,codePromotion=?,totalApayer=?,transactionDate=?,createdBy=? 
            WHERE matricule=?",
            $cursus
        );
    }

    public function supprimer($matricule)
    {
        return $this->persist("DELETE FROM {$this->table} WHERE matricule=?", [$matricule]);
    }
}
