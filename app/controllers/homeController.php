<?php
//appel de la BDD
require 'app/persistences/blogPostData.php';

//Variable qui ets égale au résultat de la fonction qui fait la requête SQL
$AllLastPost = BlogPosts($dbh);

//Affichage de la vue par le template
include 'ressources/views/home.tpl.php';


