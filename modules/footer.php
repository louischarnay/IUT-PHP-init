<footer>
    <img src="../img/logoUCBL.png" id="logoUCBL" alt="Logo Université Claude Bernard Lyon 1">
    <div id="footerP">
        <p>Copyright © Pablo Guinard 2021</p>
        <p>Tous droits d'auteur réservés</p>
    </div>
    <div id="footerA">
        <a href="contact.php">Contact</a>
        <a href="index.php">Présentation</a>
        <?php
        $db = new db();
        $nbArticles = $db->getSizeDBArticles();
        ?>
        <a href="blog.php?article=<?php echo $nbArticles ?>" class="sousMenuArticle">Article récent</a>
    </div>
</footer>