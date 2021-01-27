<?php
function lastBlogPosts(PDO $connection)
{
    $miseentab = $connection->prepare('SELECT authors.nom, posts.titre_article, posts.text_article  FROM posts
INNER JOIN authors ON authors.id = posts.authors_id
ORDER BY posts.id DESC
LIMIT 10');
    $miseentab->execute();
    $result = $miseentab->fetchAll(\PDO::FETCH_ASSOC);
    return $result;
}
//    return ($connection->query('SELECT authors.nom, posts.titre_article, posts.text_article  FROM posts
////INNER JOIN authors ON authors.id = posts.authors_id
////ORDER BY posts.id DESC
////LIMIT 10'));
//}
