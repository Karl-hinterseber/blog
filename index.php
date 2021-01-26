<?php


require_once 'config/database.php';
//front controller
 $tab = [
    'home' => 'home.php',
    '404' => 'ressources/views/errors/404.php',
 ];

 if (filter_has_var(INPUT_GET,'action')) {
    $action = filter_input(INPUT_GET,'action',FILTER_SANITIZE_STRING);
    if(!isset($tab [$action])){ // si tab différente page du tableau alors 404.php
        $action = '404';
    }
} else {
     $action = 'home'; // sinon page home
}
$fichier = $tab [$action];
 include $fichier;
