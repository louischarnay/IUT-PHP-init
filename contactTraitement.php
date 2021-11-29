<?php
session_start();
include "class/db.php";
$db2 = new db();
if($db2->addMessage($_POST["sujet"], $_POST["mail"], $_POST["tel"], $_POST["nom"], $_POST["prenom"], $_POST["message"]) == true) {
    header("Location: ../index.php");
}else {
    header("Location: ../chiffres.php");
}
