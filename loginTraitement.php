<?php
session_start();
include "class/db.php";
$db1 = new db();
if ($db1->fetchPerson($_POST["usernameEnregistrer"], $_POST["mdpEnregistrer"]) == true) {
    $_SESSION["mdpIncorrect"] = false;
    $_SESSION["id"] = $db1->getId($_POST["usernameEnregistrer"]);
    header("Location: ../index.php");
}
else {
    $_SESSION["mdpIncorrect"] = true;
    header("Location: ../login.php");
}
if($_POST["usernameEnregistrer"] == "pablo@test" && $_POST["mdpEnregistrer"] == "pablo"){
    $_SESSION["admin"] = true;
}
if(isset($_POST["enregistrer"])){
    $passwordHash = password_hash($_POST["mdpEnregistrer"], PASSWORD_DEFAULT);
    setcookie("usernameEnregistre", $_POST["usernameEnregistrer"], time() + 8400, '/');
    setcookie("mdpEnregistre", $passwordHash, time() + 8400, '/');
}
else{
    setcookie("usernameEnregistre", "", time() - 3600, '/');
    setcookie("mdpEnregistre", "", time() - 3600, '/');
}
