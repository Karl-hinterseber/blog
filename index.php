<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once 'config/database.php';
//front controller
 $menu = [
    '404' => 'ressources/views/errors/404.php',
     'home' => 'app/controllers/homeController.php',
     'homeun' => 'app/controllers/blogPostController.php',
     'homedeux' => 'app/controllers/blogPostCreateController.php'
 ];

 if (filter_has_var(INPUT_GET,'action')) {
    $action = filter_input(INPUT_GET,'action',FILTER_SANITIZE_STRING);
    if(!isset($menu [$action])){ // si menu différente page du tableau alors 404.php
        $action = '404';
    }
} else {
     $action = 'home'; // sinon page home
}
$fichier = $menu [$action];
 include $fichier;
