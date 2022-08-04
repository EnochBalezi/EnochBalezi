<?php

namespace Models;

use Config\ValidationEnseignant;

class Enseignant extends Model
{
    protected $table = "enseignants";

    /**
     * Insertion des données (Enseignants)
     *
     * @param array $data
     * @return void
     */
    public function enregistrer($data)
    {
        extract($data);
        $name = ValidationEnseignant::validateData($nom);
        $post = ValidationEnseignant::validateData($postnom);
        $pren = ValidationEnseignant::validateData($prenom);
        $gen = ValidationEnseignant::validateData($genre);
        $nive = ValidationEnseignant::validateData($niveau);
        $fonct = ValidationEnseignant::validateData($fonction);
        $tele = ValidationEnseignant::validateData($telephone);
        $emai = ValidationEnseignant::validateData($email);
        $adres = ValidationEnseignant::validateData($adresse);
        $enseignant = [
            $name, $post, $pren, $gen, $nive, $fonct, $tele, $emai, $adres, $_SESSION['name']
        ];
        return $this->requette("INSERT INTO {$this->table}(nom,postnom,prenom,sexe,niveau,fonction,telephone,email,adresse,createdBy)
        VALUES(?,?,?,?,?,?,?,?,?,?)", $enseignant);
    }

    /**
     * Modification des données (Enseignant)
     *
     * @param array $data
     * @return void
     */
    public function modifier($data)
    {
        extract($data);
        $mat = ValidationEnseignant::validateData($matricule);
        $name = ValidationEnseignant::validateData($nom);
        $post = ValidationEnseignant::validateData($postnom);
        $pren = ValidationEnseignant::validateData($prenom);
        $gen = ValidationEnseignant::validateData($genre);
        $nive = ValidationEnseignant::validateData($niveau);
        $fonct = ValidationEnseignant::validateData($fonction);
        $tele = ValidationEnseignant::validateData($telephone);
        $emai = ValidationEnseignant::validateData($email);
        $adres = ValidationEnseignant::validateData($adresse);
        $enseignant = [
            $name, $post, $pren, $gen, $nive, $fonct, $tele, $emai, $adres, $_SESSION['name'], $mat
        ];
        return $this->requette("UPDATE {$this->table} SET nom=?,postnom=?,prenom=?,sexe=?,niveau=?,fonction=?,telephone=?,email=?,adresse=?,createdBy=? 
        WHERE matricule=?", $enseignant);
    }

    /**
     * Suppression des données(Enseignants)
     *
     * @param int $matricule
     * @return void
     */
    public function supprimer($matricule)
    {
        return $this->requette("DELETE FROM enseignants WHERE matricule=?", [$matricule]);
    }

    public function searchEnseignant(string $data)
    {
        return $this->requette("SELECT * FROM enseignants WHERE nom like '%$data%' OR postNom like '%$data%'");
    }
}
