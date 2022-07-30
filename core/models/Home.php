<?php

namespace Models;

class Home extends Model
{
    protected $table = "Eleves";

    public function countEleves()
    {
        return $this->countData("SELECT * FROM eleves");
    }
    public function countClass()
    {
        return $this->countData("SELECT * FROM classes");
    }
}
