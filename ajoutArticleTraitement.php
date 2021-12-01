<?php
session_start();
include "class/db.php";
$db = new db();
$db->addArticle($_POST["titreArticle"], $_POST["descriptionArticle"], $_POST["contenuArticle"], $_POST["imageArticle"], $_POST["shortTitleArticle"]);
header("Location: ../ajoutArticle.php");
