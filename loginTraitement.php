<?php
session_start();
if ("admin" == $_POST["username"] && "admin" == $_POST["mdp"]){
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