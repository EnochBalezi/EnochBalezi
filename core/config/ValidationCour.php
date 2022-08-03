<?php

namespace Config;

class ValidationCour
{

    private static $message = [];

    public static function validate($data)
    {
        if (empty($data['designCour']))
            self::$message['designCour'] = "Vous devez préciser le designation du cours";
        if (empty($data['promotion']))
            self::$message['promotion'] = "Vous devez préciser la promotion";
        if (empty($data['enseignants']))
            self::$message['enseignants'] = "Vous devez préciser l'enseignant titulaire du cours";

        return self::$message;
    }

    public static function validateData($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlentities($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}
