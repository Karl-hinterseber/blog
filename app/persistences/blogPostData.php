<?php
/*function lastBlogPosts(PDO $connectionBDD)
{
    $miseentab = $connectionBDD->prepare('SELECT authors.nom, posts.titre_article, posts.text_article  FROM posts
INNER JOIN authors ON authors.id = posts.authors_id
ORDER BY posts.id DESC
LIMIT 10');
    $miseentab->execute();
    $result = $miseentab->fetchAll(\PDO::FETCH_ASSOC);
    return $result;
}
*/
function blogPosts(PDO $connectBDD)
{
    $miseentabtotal = $connectBDD->prepare('SELECT authors.nom, posts.titre_article, posts.text_article  FROM posts
INNER JOIN authors ON authors.id = posts.authors_id
ORDER BY posts.id DESC');
    $miseentabtotal->execute();
    $resultpoststotal = $miseentabtotal->fetchAll(\PDO::FETCH_ASSOC);
    return $resultpoststotal;
}

function blogPostByld(PDO $hello,int $clicpost)
{
    $numarticle = $hello->prepare("SELECT posts.titre_article, posts.text_article, authors.nom FROM posts
INNER JOIN authors ON authors.id = posts.authors_id
WHERE posts.id=$clicpost");
    $numarticle->execute();
    $result = $numarticle->fetchAll(\PDO::FETCH_ASSOC);
    return $result;
}
function commentsByBlogPost(PDO $hello,int $clicpost)
{
    $commentposts = $hello->prepare("SELECT comments.text_commentaire, authors.nom FROM comments
INNER JOIN authors ON authors.id = comments.authors_id
WHERE comments.posts_id=$clicpost");
    $commentposts->execute();
    $result = $commentposts->fetchAll(\PDO::FETCH_ASSOC);
    return $result;
}

