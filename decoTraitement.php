<?php
session_start();
session_destroy();
$_SESSION["admin"] = false;
header("Location: ../index.php");