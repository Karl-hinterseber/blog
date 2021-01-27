<?php include 'ressources/views/header.tpl.php'; ?>

<?php if (empty($allLastPost)):?>
    <p>Aucun article n'a été publié</p>
<?php else:?>
    <?php foreach ($allLastPost as $row):?>
        <article>
            <header>
                <h2><?=$row['titre_article']?></h2>
                <p><?=$row['nom']?></p>
            </header>
            <p><?=$row['text_article']?></p>
        </article>
    <?php endforeach; ?>
<?php endif; ?>

<?php include 'ressources/views/footer.tpl.php';?>
