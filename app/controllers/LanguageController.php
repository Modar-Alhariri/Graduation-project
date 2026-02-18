<?php
class LanguageController {

    public function change($lang = 'ar') {
        if (in_array($lang, ['ar', 'en'])) {
            $_SESSION['lang'] = $lang;
        }
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit;
    }

}
