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
            <tr><th colspan="2">Résultats Formulaire Contact</th></tr>
            </thead>
            <tbody>
            <tr>
                <th>Sujet</th>
                <td><?php echo $_POST["sujet"]?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo $_POST["mail"]?></td>
            </tr>
            <tr>
                <th>Tel</th>
                <td><?php echo $_POST["tel"]?></td>
            </tr>
            <tr>
                <th>Nom</th>
                <td><?php echo $_POST["nom"]?></td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td><?php echo $_POST["prenom"]?></td>
            </tr>
            <tr>
                <th>Message</th>
                <td><?php echo $_POST["message"]?></td>
            </tr>
            </tbody>
        </table>
    </section>
</main>
<?php include 'modules/footer.php'?>
</body>
</html>