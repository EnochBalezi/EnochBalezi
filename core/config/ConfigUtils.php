<?php

namespace Config;

use Http;

class ConfigUtils
{
    private static $token;

    public static function token_crf()
    {
        self::$token = bin2hex(uniqid(random_bytes(10)));
        return self::$token;
    }

    public static function verifyToken()
    {
        if (!$_SESSION['token'])
            Http::redirect("index.php?controller=login");
    }

    public static function message(string $message, string $type)
    {
        $_SESSION['message'] =  "<div class='alert alert-" . $type . "'>
            <strong>" . $message . "<strong>
        </div>";
    }
}
