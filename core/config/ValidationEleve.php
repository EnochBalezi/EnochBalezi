<?php

namespace Config;

class ValidationEleve
{
    protected static $message;
    public static function validate($data)
    {
        if (empty($data['nomEleve'])) {
            self::$message['nomEleve']  = "Vous devez entrez le nom";
        }
        if (empty($data['postNomEleve'])) {
            self::$message['postNomEleve']  = "Vous devez entrez le post-nom";
        }
        if (empty($data['prenomEleve'])) {
            self::$message['prenomEleve']  = "Vous devez entrez le prénom";
        }
        if (empty($data['genreEleve'])) {
            self::$message['genreEleve']  = "Vous devez entrez le genre";
        }
        if (empty($data['dateNaissEleve'])) {
            self::$message['dateNaissEleve']  = "Vous devez entrez la date de naissance";
        }
        if (empty($data['lieuNaissEleve'])) {
            self::$message['lieuNaissEleve']  = "Vous devez entrez le lieu de naissance";
        }

        if (empty($data['nationaliteEleve'])) {
            self::$message['nationaliteEleve']  = "Vous devez entrez la nationalité";
        }
        if (empty($data['nomPereEleve'])) {
            self::$message['nomPereEleve']  = "Vous devez entrez le nom du père de l'élève";
        }
        if (empty($data['nomMereEleve'])) {
            self::$message['nomMereEleve']  = "Vous devez entrez de la nom du mère de l'élève";
        }

        if (empty($data['telePereEleve'])) {
            self::$message['telePereEleve']  = "Vous devez entrez le numèro de téléphone du père de l'élève";
        }
        if (empty($data['teleMereEleve'])) {
            self::$message['teleMereEleve']  = "Vous devez entrez le numèro de téléphone de la mère de l'élève";
        }
        if (empty($data['adresseEleve'])) {
            self::$message['adresseEleve']  = "Vous devez entrez l'adresse de l'élève";
        }

        if (empty($data['profession'])) {
            self::$message['profession']  = "Vous devez entrez le profession";
        }
        if (empty($data['email'])) {
            self::$message['email']  = "Vous devez entrez l'email de l'élève";
        }
        if (empty($data['observation'])) {
            self::$message['observation']  = "Vous devez entrez l'observation de l'élève";
        }
        return self::$message;
    }
}
