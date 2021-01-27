<?php
include 'ressources/views/header.tpl';

if (!isset($AllLastPost)):
    echo "Aucun article n'a été publié";
else:
    foreach ($AllLastPost as $row) {
        echo "<li>" . $row['nom'] . " - " . $row['titre_article'] . " - " . $row['text_article']."</li>";
        }
endif;

include 'ressources/views/footer.tpl';
?>
