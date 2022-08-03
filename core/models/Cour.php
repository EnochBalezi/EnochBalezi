<?php

namespace Models;

use Config\ValidationCour;

class Cour extends Model
{
    protected $table = "cours";

    public function affichageCours()
    {
        return $this->find("
        SELECT codeCours, designationcours,designation,concat(nom,' ',postNom) as enseignan
        FROM cours inner join enseignants on enseignants.matricule=cours.enseignant
        inner join promotions on promotions.codePromotion=cours.promotion
        ");
    }

    public function affichagePromotions()
    {
        return $this->find("SELECT * FROM promotions");
    }

    public function affichageEnseignants()
    {
        return $this->find("SELECT *  FROM  enseignants ");
    }

    public function courById($codeCours)
    {
        return $this->findById("codeCours", $codeCours);
    }


    public function enregistrer($data)
    {
        extract($data);
        $cours = ValidationCour::validateData($designCour);
        $promo = ValidationCour::validateData($promotion);
        $enseign = ValidationCour::validateData($enseignants);
        $tabCour = [$cours, $promo, $enseign, $_SESSION['name']];
        return $this->persist("INSERT INTO cours(designationCours,promotion,enseignant,createdBy)
        VALUES(?,?,?,?)", $tabCour);
    }

    public function modifier($data)
    {
        extract($data);
        $cours = ValidationCour::validateData($designCour);
        $code = ValidationCour::validateData($codeCours);
        $promo = ValidationCour::validateData($promotion);
        $enseign = ValidationCour::validateData($enseignants);
        $tabCour = [$cours, $promo, $enseign, $_SESSION['name'], $code];
        return $this->persist("UPDATE cours SET designationCours=?,promotion=?,enseignant=?,createdBy=?
        WHERE codeCours=?", $tabCour);
    }

    public function supprimer(int $codeCours)
    {
        return $this->persist("DELETE FROM cours WHERE codeCours=?", [$codeCours]);
    }

    public function rechercheCours(string $critere)
    {
        return $this->find("
        SELECT codeCours, designationCours,designation,concat(nom,' ',postNom) as enseignan
        FROM cours inner join enseignants on enseignants.matricule=cours.enseignant
        inner join promotions on promotions.codePromotion=cours.promotion
        
        WHERE designationCours like '%$critere%'");
    }
}
