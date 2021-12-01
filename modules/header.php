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
                        <?php
                            $db = new db();
                            $nbArticles = $db->getSizeDBArticles();
                        ?>
                        <li><a href="/blog.php" class="menuSelected">BLOG</a></li>
                        <?php if($nbArticles > 0):?>
                            <li><a href="blog.php?article=<?php echo $nbArticles ?>" class="sousMenuArticle"><?php echo $db->getShortTitleArticle($nbArticles) ?></a></li>
                        <?php endif?>
                        <?php if($nbArticles > 1):?>
                            <li><a href="blog.php?article=<?php echo $nbArticles-1 ?>" class="sousMenuArticle"><?php echo $db->getShortTitleArticle($nbArticles-1) ?></a></li>
                        <?php endif?>
                        <?php if($nbArticles > 2):?>
                            <li><a href="blog.php?article=<?php echo $nbArticles-2 ?>" class="sousMenuArticle"><?php echo $db->getShortTitleArticle($nbArticles-2) ?></a></li>
                        <?php endif?>
                        <?php if($nbArticles > 3):?>
                            <li><a href="blog.php?article=<?php echo $nbArticles-3 ?>" class="sousMenuArticle"><?php echo $db->getShortTitleArticle($nbArticles-3) ?></a></li>
                        <?php endif?>
                        <?php if($nbArticles > 4):?>
                            <li><a href="blog.php?article=<?php echo $nbArticles-4 ?>" class="sousMenuArticle"><?php echo $db->getShortTitleArticle($nbArticles-4) ?></a></li>
                        <?php endif?>
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
