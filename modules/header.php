<?php include_once __DIR__."/../include/config.php"?>
<header>
    <div id="menu">
        <nav>
            <ul>
                <li><a href="/index.php">ACCUEIL</a></li>
                <li><a href="/contact.php">CONTACT</a></li>
                <li><a href="/inscription.php">INSCRIPTION</a></li>
                <li id="blog"><a href="">BLOG</a>
                    <ul id="sousMenu">
                        <li><a href="/blog.php" class="menuSelected">BLOG</a></li>
                        <li><a href="/blog.php?article=1" class="sousMenuArticle">MINECRAFT</a></li>
                        <li><a href="/blog.php?article=2" class="sousMenuArticle">CRYPTOMINING</a></li>
                        <li><a href="/blog.php?article=3" class="sousMenuArticle">NINTENDO</a></li>
                    </ul>
                </li>
                <li id="chiffres"><a href="/chiffres.php">CHIFFRES</a></li>
                <li>
                    <?php
                    if(isset($_SESSION['connected']) == true): ?>
                        <a href="/decoTraitement.php">DECONNEXION</a>
                    <?php else: ?>
                        <a href="/login.php">LOGIN</a>
                    <?php endif ?>

                </li>
            </ul>
        </nav>
    </div>
</header>
