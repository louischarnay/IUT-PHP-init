<?php session_start()?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.8">
    <title>Connexion</title>
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
    <section id="formConnexion">
        <h2 class="hidden">TITRE</h2>
        <form id="formulaire" data-aos="slide-right" data-aos-duration="1000" data-aos-easing="ease-out" action="loginTraitement.php" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend>CONNEXION</legend>
                <div id="formulaireConnexion">
                    <?php
                        $f1 = new form();
                        echo $f1->input('email', ['usernameEnregistrer', 'labelEmail2', 'Login', true]);
                        echo $f1->input('password', ['mdpEnregistrer', 'labelMdp', 'Mot de passe', true]);
                    ?>
                    <div id="divMessageIncorrect">
                        <p id="messageIncorrect">
                            <?php if(isset($_SESSION["mdpIncorrect"]) == true) {
                                echo "Adresse email ou mot de passe incorrect";
                            }?>
                        </p>
                    </div>
                    <?php echo $f1->input('checkbox', ['enregistrer', 'enregistrer', 'labelEnregistrer', 'labelLoisir', 'S\'enregistrer', 'checkBox'])?>
                    <div class="divButtons">
                        <button type="submit" class="envoyerInscription">Se connecter</button>
                        <button type="reset" class="effacerInscription">Effacer</button>
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