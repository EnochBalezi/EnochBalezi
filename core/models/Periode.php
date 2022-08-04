<?php

namespace Models;

use Config\ValidationPeriode;

class Periode extends Model
{
    protected $table = "periodes";

    public function enregistrer($data)
    {
        extract($data);
        $design = ValidationPeriode::validateData($designPeriode);
        return $this->requette("INSERT INTO {$this->table}(designation,createdBy)
        VALUES(?,?)", [$design, $_SESSION['name']]);
    }
}
