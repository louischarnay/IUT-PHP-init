<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Contact</title>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
<?php include 'modules/banner.php'?>
<?php include 'modules/header.php'?>
<main>
    <section id="formContact">
        <form data-aos="slide-right" data-aos-duration="1000" data-aos-easing="ease-out" action="repFormContact.php" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend>CONTACTEZ-MOI</legend>
                <div id="formulaireContact">
                    <input class="inputContact" type="text" name="sujet" id="sujet" required="required">
                    <label class="labelContact" id="labelSujet" for="sujet">Sujet</label>
                    <input class="inputContact" type="email" name="mail" id="mail" required="required">
                    <label class="labelContact" id="labelEmail" for="mail">Email</label>
                    <input class="inputContact" type="tel" name="tel" id="tel" required="required">
                    <label class="labelContact" id="labelTel" for="tel">Téléphone</label>
                    <input class="inputContact" type="text" name="nom" id="nom" required="required">
                    <label class="labelContact" id="labelNom" for="nom">Nom</label>
                    <input class="inputContact"     type="text" name="prenom" id="prenom" required="required">
                    <label class="labelContact" id="labelPrenom" for="prenom">Prénom</label>
                    <textarea name="message" id="message" rows="10" cols="50" maxlength="300" required="required"></textarea>
                    <label class="labelContact" id="labelMessage" for="message">Votre message</label>
                    <div id="divButtons">
                        <button class="envoyerContact" type="submit">Envoyer</button>
                        <button class="effacerContact" type="reset">Effacer</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </section>
    <section id="coordonnées" data-aos="slide-left" data-aos-duration="1000" data-aos-easing="ease-out">
        <h2 id="titreHoraires">MES HORAIRES</h2>
        <table id="tabHoraire">
            <thead>
                <tr><th colspan="4" id="thHoraires"> </th></tr>
            </thead>
            <tbody>
                <tr><th class="ligneHaut">9h / 11h</th><th class="ligneHaut">11h / 14h</th><th class="ligneHaut">14h / 17h</th><th class="ligneHaut">17h / 21h</th></tr>
                <tr><th class="ligne">Lundi</th><td class="ligne"><img src="img/refuse.png" alt="non" class="imgOui"></td><td class="ligne"><img src="img/valide.png" alt="oui" class="imgOui"></td><td class="ligne"><img src="img/valide.png" alt="oui" class="imgOui"></td></tr>
                <tr><th class="ligne">Mardi</th><td class="ligne"><img src="img/refuse.png" alt="non" class="imgNon"></td><td class="ligne"><img src="img/valide.png" alt="oui" class="imgOui"></td><td class="ligne"><img src="img/valide.png" alt="oui" class="imgOui"></td></tr>
                <tr><th class="ligne">Mercredi</th><td class="ligne"><img src="img/refuse.png" alt="non" class="imgNon"></td><td class="ligne"><img src="img/refuse.png" alt="non" class="imgNon"></td><td class="ligne"><img src="img/valide.png" alt="oui" class="imgOui"></td></tr>
                <tr><th class="ligne">Jeudi</th><td class="ligne"><img src="img/refuse.png" alt="non" class="imgNon"></td><td class="ligne"><img src="img/valide.png" alt="oui" class="imgOui"></td><td class="ligne"><img src="img/valide.png" alt="oui" class="imgOui"></td></tr>
                <tr><th class="ligne">Vendredi</th><td class="ligne"><img src="img/refuse.png" alt="non" class="imgNon"></td><td class="ligne"><img src="img/refuse.png" alt="non" class="imgNon"></td><td class="ligne"><img src="img/refuse.png" alt="non" class="imgNon"></td></tr>
                <tr><th class="ligne">Samedi</th><td class="ligne"><img src="img/valide.png" alt="oui" class="imgOui"></td><td class="ligne"><img src="img/valide.png" alt="oui" class="imgOui"></td><td class="ligne"><img src="img/valide.png" alt="oui" class="imgOui"></td></tr>
            </tbody>
        </table>
        <h2 id="titreTrouvezMoi">TROUVEZ-MOI</h2>
        <div id="divTrouvezMoi">
            <div id="texteTouvezMoi">
                <p class="sousTitreTrouvezMoi">Email :</p>
                <p>pablo.guinard@etu.univ-lyon1.fr</p>
                <p class="sousTitreTrouvezMoi">Tel :</p>
                <p>06 68 39 32 21</p>
                <p class="sousTitreTrouvezMoi">Adresse :</p>
                <p>6 rue de la Paix 01000 Bourg-en-Bresse</p>
            </div>
        </div>
    </section>
</main>
<?php include 'modules/footer.php'?>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</body>
</html>