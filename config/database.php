<?php
/* Connexion à une base MySQL avec l'invocation de pilote */
$dsn = 'mysql:host=localhost;dbname=blog;charset=UTF8';
$user = 'karl';
$password = 'linux';

try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}
?>