<?php session_start()?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.8">
    <title>Inscription</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
<?php include 'modules/banner.php'?>
<?php include 'modules/header.php'?>
<main>
    <section id="formInscription">
        <form id="formulaire" data-aos="slide-right" data-aos-duration="1000" data-aos-easing="ease-out">
            <fieldset>
                <legend>INSCRIPTION</legend>
                <div id="formulaireInscription">
                    <input type="email" name="email" id="email" required="required">
                    <label for="email" id="labelEmail2">Email</label>
                    <input type="password" name="mdp" id="mdp" required="required">
                    <label for="mdp" id="labelMdp">Mot de passe</label>
                    <input type="password" name="mdp2" id="mdp2" required="required">
                    <label for="mdp2" id="labelMdp2">Réécrivez votre mot de passe</label>
                    <input type="text" name="nom" id="nom" required="required">
                    <label for="nom" id="labelNom2">Nom</label>
                    <input type="text" name="prenom" id="prenom" required="required">
                    <label for="prenom" id="labelPrenom2">Prénom</label>
                    <input type="date" name="date_naissance" id="date_naissance" required="required">
                    <label for="date_naissance" id="labelNaissance">Date de naissance</label>
                    <input type="text" name="adresse" id="adresse" required="required">
                    <label for="adresse" id="labelAdresse">Adresse</label>
                    <input type="text" name="code_postal" id="code_postal" pattern="[0-9]{5}" required="required">
                    <label for="code_postal" id="labelCodePostal">Code postal</label>
                    <input type="text" name="ville" id="ville" required="required">
                    <label for="ville" id="labelVille">Ville</label>
                    <p class="pLabel">Sexe</p>
                    <div id="radio">
                        <input type="radio" name="sexe" id="homme" class="inputSexe" value="Homme">
                        <label for="homme" id="labelhomme" class="labelSexe">Homme</label>
                        <input type="radio" name="sexe" id="nonrenseigne" class="inputSexe" value="Non renseigné">
                        <label for="nonrenseigne" id="labelnonrenseigne" class="labelSexe">Non renseigné</label>
                        <input type="radio" name="sexe" id="femme" class="inputSexe" value="Femme">
                        <label for="femme" id="labelfemme" class="labelSexe">Femme</label>
                    </div>
                    <p id="titrePhoto" class="pLabel">Avatar</p>
                    <label for="photo" id="labelphoto">Choisir une photo</label>
                    <input type="file" name="photo" id="photo" accept="image/png" required="required">
                    <p class="pLabel">Centres d'intérêts</p>
                    <div id="divLoisirs">
                        <input type="checkbox" name="loisirs[]" id="sport" value="Sport" class="checkBox">
                        <label id="labelSport" for="sport" class="labelLoisir">Sport</label>
                        <input type="checkbox" name="loisirs[]" id="jeux" value="Jeux" class="checkBox">
                        <label id="labelJeux" for="jeux" class="labelLoisir">Jeux</label>
                        <input type="checkbox" name="loisirs[]" id="musique" value="Musique" class="checkBox">
                        <label id="labelMusique" for="musique" class="labelLoisir">Musique</label>
                        <input type="checkbox" name="loisirs[]" id="lecture" value="Lecture" class="checkBox">
                        <label id="labelLexture" for="lecture" class="labelLoisir">Lecture</label>
                        <input type="checkbox" name="loisirs[]" id="dessin" value="Dessin" class="checkBox">
                        <label id="labelDessin" for="dessin" class="labelLoisir">Dessin</label>
                        <input type="checkbox" name="loisirs[]" id="cinema" value="Cinema" class="checkBox">
                        <label id="labelCinema" for="cinema" class="labelLoisir">Cinéma</label>
                    </div>
                    <label id="labelCouleur" for="couleur">Couleur préférée</label>
                    <input type="color" name="couleur" id="couleur">
                    <div id="divButtonsInscription">
                        <button type="submit" class="envoyerInscription">S'inscrire</button>
                        <button type="reset" class="effacerInscription">Effacer</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </section>
    <?php include 'modules/aside_horaires.php'?>
</main>
<?php include 'modules/footer.php'?>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</body>
</html>