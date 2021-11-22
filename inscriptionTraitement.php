<?php
session_start();
include "class/db.php";
$db1 = new db();
if ($db1->createAccount($_POST["email"], $_POST["prenom"], $_POST["nom"], $_POST["mdp"], $_POST["ville"], $_POST["code_postal"], $_POST["adresse"]) == true) {
    $_SESSION['connected'] = true;
    $_SESSION['nom'] = $db1->getNom($_POST["username"]);
    $_SESSION['prenom'] = $db1->getPrenom($_POST["username"]);
    header("Location: ../index.php");
}
else {
    header("Location: ../index.php");
    //inscription failed
}
?>