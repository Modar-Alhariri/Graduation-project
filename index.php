<?php
/*
index.php
The entry point of the application (Front Controller).

1- Loads core files.

2- Creates an instance of App to start the system.
*/
session_start();
require_once 'app/config/Database.php';
require_once 'app/core/Model.php';
require_once 'app/core/Controller.php';
require_once 'app/controllers/ProtectionController.php';
require_once 'app/core/Language.php';
require_once 'app/core/App.php';

$lang = Language::load();

$app = new App();
