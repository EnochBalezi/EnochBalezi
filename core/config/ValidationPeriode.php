<?php

namespace Config;

class ValidationPeriode
{
    private static $message = [];

    public static function validate($data)
    {
        if (empty($data['designation']))
            self::$message['designation'] = "Vous devez préciser la designation";
        return self::$message;
    }
    public static function validateData($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        // $data = htmlentities($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}
