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
<?php
    include "class/db.php";
    include "class/form.php";
    include "modules/banner.php";
    include 'modules/header.php';
?>
<main>
    <section id="formInscription">
        <form data-aos="slide-right" data-aos-duration="1000" data-aos-easing="ease-out" action="inscriptionTraitement.php" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend>INSCRIPTION</legend>
                <div id="formulaireInscription">
                    <?php  
                        $f1 = new form();
                        echo $f1->input('email', ['email', 'labelEmail', 'Email', true]);
                        echo $f1->input('password', ['mdp', 'labelMdp', 'Mot de passe', true]);
                        echo $f1->input('password', ['mdp2', 'labelMdp2', 'Réécrivez votre mot de passe', true]);
                        echo $f1->input('text', ['nom', 'labelNom2', 'Nom', true]);
                        echo $f1->input('text', ['prenom', 'labelPrenom2', 'Prenom', true]);
                        echo $f1->input('date', ['date_naissance', 'labelNaissance', 'Date de naissance', true]);
                        echo $f1->input('text', ['adresse', 'labelAdresse', 'Adresse', true]);
                        echo $f1->input('text', ['code_postal', 'labelCodePostal', 'Code postal', true]);
                        echo $f1->input('text', ['ville', 'labelVille', 'Ville', true]);
                    ?>
                    <p class="pLabel">Sexe</p>
                        <div id="radio">
                            <?php
                                echo $f1->input('radio', ['sexe', 'homme', 'labelhomme', 'labelSexe', 'Homme', 'inputSexe']);
                                echo $f1->input('radio', ['sexe', 'nonrenseigne', 'labelnonrenseigne', 'labelSexe', 'Non renseigné', 'inputSexe']);
                                echo $f1->input('radio', ['sexe', 'femme', 'labelfemme', 'labelSexe', 'Femme', 'inputSexe']);
                            ?>
                        </div>
                    </p>
                    <p id="titrePhoto" class="pLabel">Avatar</p>
                        <?php echo $f1->input('file', ['photo', 'labelphoto', 'Choisir une photo', false, 'image/png'])?>
                    </p>
                    <p class="pLabel">Centres d'intérêts</p>
                        <div id="divLoisirs">
                            <?php
                                echo $f1->input('checkbox', ['loisirs[]', 'sport', 'labelSport', 'labelLoisir', 'Sport', 'checkBox']);
                                echo $f1->input('checkbox', ['loisirs[]', 'jeux', 'labelJeux', 'labelLoisir', 'Jeux', 'checkBox']);
                                echo $f1->input('checkbox', ['loisirs[]', 'musique', 'labelMusique', 'labelLoisir', 'Musique', 'checkBox']);
                                echo $f1->input('checkbox', ['loisirs[]', 'lecture', 'labelLexture', 'labelLoisir', 'Lecture', 'checkBox']);
                                echo $f1->input('checkbox', ['loisirs[]', 'dessin', 'labelDessin', 'labelLoisir', 'Dessin', 'checkBox']);
                                echo $f1->input('checkbox', ['loisirs[]', 'cinema', 'labelCinema', 'labelLoisir', 'Cinéma', 'checkBox']);
                            ?>
                        </div>
                    </p>
                    <?php
                        echo $f1->input('color', ['couleur', 'labelCouleur', 'Couleur préférée', false])
                    ?>
                    <div id="divMessageIncorrectContact">
                        <p id="messageIncorrect">
                            <?php if(isset($_SESSION["inscriptionFailed"]) == true && $_SESSION["inscriptionFailed"] == "wrongMail") {
                                echo "Adresse email déjà utilisée";
                            }elseif(isset($_SESSION["inscriptionFailed"]) == true && $_SESSION["inscriptionFailed"] == "wrongPassword"){
                                echo "Les mots de passe ne correspondent pas";
                            }else{
                            echo "";
                            }?>
                        </p>
                    </div>

                    <div class="divButtons">
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