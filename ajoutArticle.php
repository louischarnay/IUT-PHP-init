<?php session_start()?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.8">
    <title>Ajout Article</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
<?php
include "class/db.php";
include "modules/banner.php";
include 'modules/header.php';
?>
<main>
    <section id="formAjout">
        <h2 class="hidden">TITRE</h2>
        <form action="ajoutArticleTraitement.php" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend>AJOUT ARTICLE</legend>
                <div id="formulaireAjout">
                    <label for="titreArticle" class="inFormAjout">Titre</label>
                    <input type="text" name="titreArticle" id="titreArticle" required="required" class="inFormAjout">
                    <label for="shortTitleArticle" class="inFormAjout">Titre Court</label>
                    <input type="text" name="shortTitleArticle" id="shortTitleArticle" required="required" class="inFormAjout">
                    <label for="descriptionArticle" class="inFormAjout">Description</label>
                    <textarea name="descriptionArticle" maxlength="255" id="descriptionArticle" required="required" class="inFormAjout"></textarea>
                    <label for="contenuArticle" class="inFormAjout">Contenu</label>
                    <textarea name="contenuArticle" id="contenuArticle" required="required" class="inFormAjout"></textarea>
                    <label for="imageArticle" class="inFormAjout">Image</label>
                    <input type="text" name="imageArticle" id="imageArticle" required="required" class="inFormAjout">
                    <div id="divButtons" class="inFormAjout">
                        <button class="envoyerContact" type="submit">Ajouter l'article</button>
                        <button class="effacerContact" type="reset">Annuler</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </section>
</main>
<?php include 'modules/footer.php'?>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</body>
</html>