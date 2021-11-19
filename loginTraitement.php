<?php
session_start();
if ("admin" == $_POST["username"] && "admin" == $_POST["mdp"]){
    $_SESSION['admin'] = true;
}

header("Location: ../index.php");