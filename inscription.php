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
    include 'modules/banner.php';
    include 'modules/header.php';
    include 'class/form.php';
?>
<main>
    <section id="formInscription">
        <form data-aos="slide-right" data-aos-duration="1000" data-aos-easing="ease-out" action="inscriptionTraitement.php" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend>INSCRIPTION</legend>
                <div id="formulaireInscription">
                    <?php
                        $list = array('email', 'password', 'nom', 'prenom', 'date_naissance', 'adresse', 'code_postal', 'ville', 'sexe', 'photo', 'centre_interets', 'couleur');
                        $f1 = new form();
                        $f1->setList($list);
                        $f1->input();
                    ?>
                    <div id="divMessageIncorrectContact">
                        <p id="messageIncorrect">
                            <?php 
                                if(isset($_SESSION["inscriptionFailed"]) == true && $_SESSION["inscriptionFailed"] == "wrongMail") {
                                    echo "Adresse email déjà utilisée";
                                }
                                elseif(isset($_SESSION["inscriptionFailed"]) == true && $_SESSION["inscriptionFailed"] == "wrongPassword"){
                                    echo "Les mots de passe ne correspondent pas";
                                }
                                else{
                                    echo "";
                                }
                            ?>
                        </p>
                    </div>
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