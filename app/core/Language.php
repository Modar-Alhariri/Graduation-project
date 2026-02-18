<?php

// loading language according to session lang 
class Language {
    public static function load() {
        if (!isset($_SESSION['lang'])) {
            $_SESSION['lang'] = 'en'; // defualt language 
        }

        $lang = $_SESSION['lang'];
        $file = __DIR__ . "/../../assets/lang/$lang.php";

        if (file_exists($file)) {
            return require $file;
        }

        // fallback
        return require __DIR__ . "/../../assets/lang/en.php";
    }
}
