<?php
session_start();
$_SESSION['form']=$_POST;
include "class/db.php";
$db1 = new db();
$result = $db1->createAccount($_POST["email"], $_POST["prenom"], $_POST["nom"], $_POST["mdp"], $_POST["mdp2"], $_POST["ville"], $_POST["code_postal"], $_POST["adresse"]);
if ($result == 0) {
    $_SESSION['connected'] = true;
    $_SESSION["id"] = $db1->getId($_POST["email"]);
    $_SESSION['inscriptionFailed'] = "fine";
    header("Location: ../index.php");
}
else if($result == 1){
    $_SESSION['inscriptionFailed'] = "wrongPassword";
    header("Location: ../inscription.php");
}
else if($result == 2){
    $_SESSION['inscriptionFailed'] = "wrongMail";
    header("Location: ../inscription.php");
}