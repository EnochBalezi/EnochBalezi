<?php

namespace Models;

abstract class Model
{
    protected $pdo;
    protected $table;

    private $resultat = [];

    public function __construct()
    {
        $this->pdo =  DataBase::getPdo();
    }

    public function findAll()
    {
        $query = $this->pdo->query("SELECT * FROM {$this->table} ORDER BY createdAt DESC ");
        return $this->resultat = $query->fetchAll();
    }

    public function findById(string $cle, $valeur)
    {
        $query = $this->pdo->prepare("SELECT * FROM {$this->table} where $cle=?");
        $query->execute([$valeur]);
        return $this->resultat = $query->fetch();
    }

    public function countData($statement)
    {
        $query = $this->pdo->query($statement);
        $this->resultat = $query->fetch();
        return $query->rowCount();
    }

    public function persist(string $statement, $data)
    {
        $query = $this->pdo->prepare($statement);
        return $query->execute($data);
    }

    public function search(string $critere)
    {
        $query = $this->pdo->query("SELECT * FROM {$this->table} WHERE " . $critere);
        $this->resultat = $query->fetchAll();
        return $this->resultat;
    }
    public function find($statement)
    {
        $query = $this->pdo->query($statement);
        return $this->resultat = $query->fetchAll();
    }

    public function requette(String $sql, array $attributs = null)
    {
        if ($attributs != null) {
            $query = $this->pdo->prepare($sql);
            $query->execute($attributs);
        } else {
            $query = $this->pdo->query($sql);
        }
        return $query;
    }
}
