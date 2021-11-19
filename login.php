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
<?php include 'modules/banner.php'?>
<?php include 'modules/header.php'?>
<main>
    <section id="formInscription">
        <form id="formulaire" data-aos="slide-right" data-aos-duration="1000" data-aos-easing="ease-out" action="loginTraitement.php" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend>INSCRIPTION</legend>
                <div id="formulaireInscription">
                    <input type="text" name="username" id="username" required="required">
                    <label for="username" id="labelEmail2">Login</label>
                    <input type="password" name="mdp" id="mdp" required="required">
                    <label for="mdp" id="labelMdp">Mot de passe</label>
                    <div id="divButtonsInscription">
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