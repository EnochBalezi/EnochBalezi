<?php

namespace Models;

use Config\ConfigUtils;
use \Config\ValidationUser;

class User extends Model
{
    protected $table = "users";
    private $resultat;

    public function login($userName, $passw)
    {
        $user = ValidationUser::validateData($userName);
        $pass = ValidationUser::validateData($passw);
        $query = $this->pdo->prepare("SELECT * FROM users WHERE nom=? OR email=?");
        $query->execute([$user, $user]);
        $this->resultat = $query->fetch();

        if ($this->resultat && password_verify($pass, $this->resultat->password)) {
            $_SESSION['id'] = $this->resultat->id;
            $_SESSION['name'] = $this->resultat->nom;
            $_SESSION['autherized'] = $this->resultat->role;
            $_SESSION['token'] = ConfigUtils::token_crf() . $this->resultat->id;
            return true;
        }
        return false;
    }
}
