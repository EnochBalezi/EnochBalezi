<?php

namespace Models;

use Config\EntityNotValidException;

class Eleve extends Model
{
    protected $table = "Eleves";

    public function matricle($nom, $genre, $anneSco, $nation)
    {
        $sql = $this->pdo->query("select Sexe from eleves where Sexe='$genre'");
        $sql->fetch();
        $nb = $sql->rowCount();
        $number = $nb + 1;
        $code = implode("-", [substr(strtoupper($nom), 0, 2), ucfirst($genre), substr($anneSco, 5, 4), substr(ucfirst($nation), 0, 1)]);
        return  $code . '-' . $number;
    }

    public function eleveById($id)
    {
        return $this->findById("matricule", $id);
    }

    public function enregistrer($data)
    {
        extract($data);
        $matricule = $this->matricle($nomEleve, $genreEleve, $anneSco, $nationaliteEleve);
        $eleve = [
            $matricule, $nomEleve, $postNomEleve, $prenomEleve, $genreEleve, $dateNaissEleve, $lieuNaissEleve, $nationaliteEleve,
            $nomPereEleve, $nomMereEleve, $telePereEleve,
            $teleMereEleve, $adresseEleve, $profession, $email,
            $observation, $ecoleProvenance,
            $pourcentage, $_SESSION['name']
        ];

        $cursus = [$matricule, $anneSco, $codePromotion, $montantPaiement, $dateTransaction, 'Elie'];

        try {

            $this->pdo->beginTransaction();
            $queryEleve = $this->pdo->prepare("INSERT INTO {$this->table}(matricule,nom,postNom,prenom,Sexe,dateNaissance,lieuNaissance,nationalite,nomPere,nomMere,telPere,telMere,adresse,profession,email,observation,ecoleProvenance,pourcentage,createdBy)
            Values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");
            $queryCursus =
                $this->pdo->prepare("INSERT INTO cursus(matricule,annee,codePromotion,totalApayer,transactionDate,CreatedBy)
            Values(?,?,?,?,?,?) ");

            $queryEleve->execute($eleve);
            $queryCursus->execute($cursus);

            $this->pdo->commit();
        } catch (EntityNotValidException $ex) {
            $ex->getMessage();
            $this->pdo->rollBack();
        }
    }

    public function modifier($data)
    {
        extract($data);
        $eleve = [
            $nomEleve, $postNomEleve, $prenomEleve, $genreEleve, $dateNaissEleve, $lieuNaissEleve, $nationaliteEleve,
            $nomPereEleve, $nomMereEleve, $telePereEleve,
            $teleMereEleve, $adresseEleve, $profession, $email,
            $observation, $ecoleProvenance,
            $pourcentage, $_SESSION['name'], $matricule
        ];
        return $this->persist(
            "UPDATE {$this->table} SET nom=?,postNom=?,prenom=?,Sexe=?,dateNaissance=?,lieuNaissance=?,nationalite=?,nomPere=?,nomMere=?,telPere=?,telMere=?,adresse=?,profession=?,email=?,observation=?,ecoleProvenance=?,pourcentage=?,createdBy=? WHERE matricule=?",
            $eleve
        );
    }

    public function supprimer($matricule)
    {
        return $this->persist("DELETE FROM {$this->table} WHERE matricule=?", [$matricule]);
    }

    public function searchEleve($data)
    {
        return $this->search("matricule LIKE '%$data%' OR nom LIKE '%$data%' OR postNom LIKE '%$data%'");
    }
}
