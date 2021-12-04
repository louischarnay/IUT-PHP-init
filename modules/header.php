<?php include_once __DIR__."/../include/config.php"?>
<header>
    <div id="menu">
        <nav>
            <ul>
                <li><a href="/index.php" <?php if($_SERVER["SCRIPT_NAME"] == "/index.php"){
                    ?>class="active"
                       <?php } ?>>ACCUEIL</a></li>
                <li><a href="/contact.php" <?php if($_SERVER["SCRIPT_NAME"] == "/contact.php"){
                    ?>class="active"
                        <?php } ?>>CONTACT</a></li>
                <?php if(isset($_SESSION["admin"])){?>
                    <li><a href="/ajoutArticle.php" <?php if($_SERVER["SCRIPT_NAME"] == "/ajoutArticle.php"){
                        ?>class="active"
                            <?php } ?>>AJOUT ARTICLE</a></li>
                <?php }else{?>
                    <li><a href="/inscription.php" <?php if($_SERVER["SCRIPT_NAME"] == "/inscription.php"){
                        ?>class="active"
                            <?php } ?>>INSCRIPTION</a></li>
                <?php }?>
                <li id="blog"><a href="" <?php if($_SERVER["SCRIPT_NAME"] == "/blog.php"){
                    ?>class="active"
                        <?php } ?>>BLOG</a>
                    <ul id="sousMenu">
                        <?php
                            $db = new db();
                            $articles = $db->getLastsArticles(true);
                        ?>
                        <li><a href="/blog.php" class="menuSelected" <?php if($_SERVER["SCRIPT_NAME"] == "/blog.php"){
                            ?>class="active"
                                <?php } ?>>BLOG</a></li>
                        <?php foreach ($articles as $value){?>
                            <li><a href="blog.php?article=<?php echo $value["id"] ?>" class="sousMenuArticle"><?php echo $value["shortTitle"] ?></a></li>
                        <?php } unset($value)?>
                    </ul>
                </li>
                <li id="chiffres"><a href="/chiffres.php"<?php if($_SERVER["SCRIPT_NAME"] == "/chiffres.php"){
                    ?>class="active"
                        <?php } ?>>CHIFFRES</a></li>
                <li>
                    <?php
                    if(isset($_SESSION['id'])): ?>
                        <a href="/decoTraitement.php">DECONNEXION</a>
                    <?php else: ?>
                        <a href="/login.php">LOGIN</a>
                    <?php endif ?>

                </li>
            </ul>
        </nav>
    </div>
</header>
