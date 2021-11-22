<?php
session_start();
include "class/db.php";
$db1 = new db();
if ($db1->fecthPerson($_POST["username"], $_POST["mdp"]) == true) {
    $_SESSION['admin'] = true; 
}

$_SESSION['username'] = $_POST["username"];

if(isset($_POST["enregistrer"])){
    setcookie("usernameEnregistre", $_POST["username"], time() + 8400, '/');
    setcookie("mdpEnregistre", $_POST["mdp"], time() + 8400, '/');
}
else{
    setcookie("usernameEnregistre", "", time() - 3600, '/');
    setcookie("mdpEnregistre", "", time() - 3600, '/');
}

header("Location: ../index.php");