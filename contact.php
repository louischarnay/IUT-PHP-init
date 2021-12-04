<?php session_start()?>
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
<?php
    include "class/db.php";
    include "class/form.php";
    include "modules/banner.php";
    include 'modules/header.php';
?>
<main>
    <section id="formContact">
        <form data-aos="slide-right" data-aos-duration="1000" data-aos-easing="ease-out" action="contactTraitement.php" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend>CONTACTEZ-MOI</legend>
                <div id="formulaireContact">
                    <?php
                        $f1 = new form();
                        echo $f1->input('text', ['sujet', 'labelSujet', 'Sujet', true]);
                        echo $f1->input('email', ['email', 'labelEmail', 'Email', true]);
                        echo $f1->input('tel', ['tel', 'labelTel', 'Téléphone', true]);
                        echo $f1->input('text', ['nom', 'labelNom', 'Nom', true]);
                        echo $f1->input('text', ['prenom', 'labelPrenom', 'Prenom', true]);
                    ?>
                    <label class="labelContact" id="labelMessage" for="message">Votre message</label>
                    <textarea name="message" id="message" rows="10" cols="50" maxlength="300" required="required"></textarea>
                    <div class="divButtons">
                        <button class="envoyerContact" type="submit">Envoyer</button>
                        <button class="effacerContact" type="reset">Effacer</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </section>
    <?php include "modules/aside_horaires.php"?>
</main>
<?php include 'modules/footer.php'?>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</body>
</html>