<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Contact</title>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php include 'modules/banner.php'?>
<?php include 'modules/header.php'?>
<main>
    <section id="tabChiffres">
        <h2>Réponse du formulaire</h2>
        <table id="tableau">
            <thead>
            <tr><th colspan="2">Résultats Formulaire Inscription</th></tr>
            </thead>
            <tbody>
            <tr>
                <th>email</th>
                <td><?php echo $_POST["email"]?></td>
            </tr>
            <tr>
                <th>mdp</th>
                <td><?php echo $_POST["mdp"]?></td>
            </tr>
            <tr>
                <th>mdp2</th>
                <td><?php echo $_POST["mdp2"]?></td>
            </tr>
            <tr>
                <th>nom</th>
                <td><?php echo $_POST["nom"]?></td>
            </tr>
            <tr>
                <th>prenom</th>
                <td><?php echo $_POST["prenom"]?></td>
            </tr>
            <tr>
                <th>date_naissance</th>
                <td><?php echo $_POST["date_naissance"]?></td>
            </tr>
            <tr>
                <th>adresse</th>
                <td><?php echo $_POST["adresse"]?></td>
            </tr>
            <tr>
                <th>code_postal</th>
                <td><?php echo $_POST["code_postal"]?></td>
            </tr>
            <tr>
                <th>ville</th>
                <td><?php echo $_POST["ville"]?></td>
            </tr>
            <tr>
                <th>sexe</th>
                <td><?php echo $_POST["sexe"]?></td>
            </tr>
            <tr>
                <th>loisirs</th>
                <td><?php
                foreach ($_POST["loisirs"] as $loisir) :
                    echo $loisir.";";
                endforeach;?></td>
            </tr>
            <tr>
                <th>color</th>
                <td><?php echo $_POST["couleur"]?></td>
            </tr>
            </tbody>
        </table>
    </section>
</main>
<?php include 'modules/footer.php'?>
</body>
</html>