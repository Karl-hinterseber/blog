<?php
//appel de la BDD
require 'app/persistences/blogPostData.php';

if (filter_has_var(INPUT_GET,'id')) {
    $clicpost = filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);
    $postSingle = blogPostByld($dbh, $clicpost);
    $postSingletwo = commentsByBlogPost($dbh, $clicpost);
}
require 'ressources/views/blogPost.tpl.php';