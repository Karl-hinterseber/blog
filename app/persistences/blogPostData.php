<?php
function lastBlogPosts(PDO $connectionBDD)
{
    $miseentab = $connectionBDD->prepare('SELECT authors.nom, posts.titre_article, posts.text_article  FROM posts
INNER JOIN authors ON authors.id = posts.authors_id
ORDER BY posts.id DESC
LIMIT 10');
    $miseentab->execute();
    $result = $miseentab->fetchAll(\PDO::FETCH_ASSOC);
    return $result;
}

function BlogPosts(PDO $connectBDD)
{
    $miseentabtotal = $connectBDD->prepare('SELECT authors.nom, posts.titre_article, posts.text_article  FROM posts
INNER JOIN authors ON authors.id = posts.authors_id
ORDER BY posts.id DESC');
    $miseentabtotal->execute();
    $resultpoststotal = $miseentabtotal->fetchAll(\PDO::FETCH_ASSOC);
    return $resultpoststotal;
}