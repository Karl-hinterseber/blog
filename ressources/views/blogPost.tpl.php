<?php include 'ressources/views/header.tpl.php'; ?>

<?php if (empty($postSingle)):?>
    <p>Cet article a été supprimé</p>
<?php else:?>
    <?php foreach ($postSingle as $row):?>
        <article>
            <header>
                <h2><?=$row['titre_article']?></h2>
                <p><?=$row['text_article']?></p>
            </header>
            <p><?=$row['nom']?></p>
        </article>
    <?php endforeach; ?>
<?php endif; ?>
<?php if (empty($postSingletwo)):?>
    <p>Il n'y a aucun commentaire pour l'instant</p>
<?php else:?>
    <?php foreach ($postSingletwo as $row):?>
        <article>
            <header>
                <p><?=$row['text_commentaire']?></p>
            </header>
            <p><?=$row['nom']?></p>
        </article>
    <?php endforeach; ?>
<?php endif; ?>

<?php include 'ressources/views/footer.tpl.php';?>