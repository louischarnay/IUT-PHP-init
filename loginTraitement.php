<?php
session_start();
include "class/db.php";
$db1 = new db();
if ($db1->fecthPerson($_POST["username"], $_POST["mdp"]) == true) {
    $_SESSION['admin'] = true; 
}

header("Location: ../index.php");