<?php include 'ressources/views/header.tpl.php'; ?>

    <form action="/index.php?action=postcreate"  method="post">
        <div class="mb-3">
            <label for="authors_id">Entrez votre id</label>
            <input type="number" class="form-control" id="authors_id" name="authors_id">
        </div>
        <div class="mb-3">
            <label for="titre_article">Entrez le titre de votre article</label>
            <input type="texte" class="form-control" id="titre_article" name="titre_article">
        </div>
        <div class="mb-3">
            <label for="text_article">Entrez le texte de votre article</label>
            <input type="text" class="form-control" id="text_article" name="text_article">
        </div>
        <div class="mb-3">
            <label for="publication_debut" class="form-label">Entrez la date de début de publication de votre
                article</label>
            <input type="date" class="form-control" id="publication_debut" name="publication_debut">
        </div>
        <div class="mb-3">
            <label for="publication_fin" class="form-label">Entrez la date de fin de publication de votre
                article</label>
            <input type="date" class="form-control" id="publication_fin" name="publication_fin">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

<?php include 'ressources/views/footer.tpl.php'; ?>

