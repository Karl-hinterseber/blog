<?php
//appel de la BDD
require 'app/persistences/blogPostData.php';

if (filter_has_var(INPUT_GET,'clicpost')) {
    $id = filter_input(INPUT_GET,'clicpost',FILTER_SANITIZE_NUMBER_INT);
    $postSingle = blogPostByld($dbh, $id);
    $postSingletwo = commentsByBlogPost($dbh, $id);
}
require 'ressources/views/blogPost.tpl.php';