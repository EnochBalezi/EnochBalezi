<?php

namespace Models;

use Config\ValidationPromotion;

class Promotion extends Model
{
    protected $table = "Promotions";

    public function enregistrer($data)
    {
        extract($data);
        $desig = ValidationPromotion::validateData($designation);
        $promotion = [$desig, $_SESSION['name']];
        $this->persist("INSERT INTO {$this->table}(designation,createdBy)VALUES(?,?)", $promotion);
    }

    public function promotionById($code)
    {
        return $this->findById("codePromotion", $code);
    }

    public function modifier($data)
    {
        extract($data);
        $code = ValidationPromotion::validateData($codePromo);
        $desig = ValidationPromotion::validateData($designation);
        $promotion = [$desig, $_SESSION['name'], $code];
        $this->persist("UPDATE {$this->table} SET designation=?,createdBy=? WHERE codePromotion=?", $promotion);
    }

    public function supprimer($codePromotion)
    {
        $code = ValidationPromotion::validateData($codePromotion);
        $this->persist("DELETE FROM {$this->table}  WHERE codePromotion=?", [$code]);
    }

    public function recherche($data)
    {
        return $this->search("designation like '%$data%'");
    }
}
