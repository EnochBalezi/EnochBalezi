<?php

namespace Config;

class ValidationEnseignant
{
    private static $message = [];

    public static function validate($data)
    {
        if (empty($data['nom']))
            self::$message['nom'] = "Vous devez préciser le designation";
        if (empty($data['postnom']))
            self::$message['postnom'] = "Vous devez préciser le postnom";
        if (empty($data['prenom']))
            self::$message['prenom'] = "Vous devez préciser le prenom";
        if (empty($data['genre']))
            self::$message['genre'] = "Vous devez préciser le genre";
        if (empty($data['niveau']))
            self::$message['niveau'] = "Vous devez préciser le niveau";
        if (empty($data['fonction']))
            self::$message['fonction'] = "Vous devez préciser le fonction";
        if (empty($data['telephone']))
            self::$message['telephone'] = "Vous devez préciser le numéro téléphone";
        if (empty($data['email']))
            self::$message['email'] = "Vous devez préciser l'email";
        if (empty($data['adresse']))
            self::$message['adresse'] = "Vous devez préciser l'adresse";
        return self::$message;
    }
    public static function validateData($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}
