<?php

namespace Config;


class ValidationCursus
{
    private static $message;
    public static function validate($data)
    {
        if (empty($data['anneSco']))
            self::$message['anneSco'] = "Vous devez préciser l'année scolaire";
        if (empty($data['codePromotion']))
            self::$message['codePromotion'] = "Vous devez préciser la promotion";
        if (empty($data['montantPaiement']))
            self::$message['montantPaiement'] = "Vous devez préciser le montant est ";
        if (empty($data['dateTransaction']))
            self::$message['dateTransaction'] = "Vous devez préciser la date";
        return self::$message;
    }
}
