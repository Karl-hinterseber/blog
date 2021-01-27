SELECT authors.nom, posts.titre_article, posts.text_article  FROM posts
INNER JOIN authors ON authors.id = posts.authors_id
ORDER BY posts.id DESC
LIMIT 10