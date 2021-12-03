<?php include_once __DIR__.'/../class/db.php';
$db1 = new db();
?>

<div id="header">
    <p id="titrePablo">
        <?php 
            if (isset($_SESSION['id'])){
                echo $db1->getNom((string) $_SESSION['id']);
            }
            else {
                echo "Bienvenue";
            }
            
        ?>
    </p>
    <img src="/img/logo_html.png" alt="logo HTML" id="logo">
    <p id="titreGuinard">
        <?php 
            if (isset($_SESSION['id'])){
                echo $db1->getPrenom((string) $_SESSION['id']);
            }
            else {
                echo "Invité";
            }
            
        ?>
    </p>
    <h1 id="hidden">ACCUEIL</h1>
</div>