<?php
//appel de la BDD



$ap = array();
if (filter_has_var(INPUT_POST,'authors_id')) {
    $authors_id = filter_input(INPUT_POST, 'authors_id', FILTER_SANITIZE_NUMBER_INT);
}
if (filter_has_var(INPUT_POST,'titre_article')) {
    $titre_article = filter_input(INPUT_POST, 'titre_article', FILTER_SANITIZE_STRING);
}
if (filter_has_var(INPUT_POST,'text_article')) {
    $text_article = filter_input(INPUT_POST, 'text_article', FILTER_SANITIZE_STRING);
}
if (filter_has_var(INPUT_POST,'publication_debut')) {
    $publication_debut = filter_input(INPUT_POST, 'publication_debut',FILTER_SANITIZE_STRING);
}
if (filter_has_var(INPUT_POST,'publication_fin',)) {
    $publication_fin = filter_input(INPUT_POST, 'publication_fin', FILTER_SANITIZE_STRING);
}
array_push($ap, $authors_id, $titre_article, $text_article, $publication_debut, $publication_fin );
require 'app/persistences/blogPostData.php';
//var_dump($authors_id);
//var_dump($titre_article);
require 'ressources/views/blogPostCreate.tpl.php';
$create = blogPostCreate($dbh, $ap);
//var_dump($create);