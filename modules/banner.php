<div id="header">
    <p id="titrePablo">Pablo</p>
    <img src="/img/logo_html.png" alt=" logo HTML" id="logo">
    <?php
    if(isset($_SESSION['admin']) && $_SESSION['admin']): ?>
        <p id="titreGuinard">ADMIN</p>
    <?php else: ?>
        <p id="titreGuinard">GUINARD</p>
    <?php endif ?>
    <h1 id="hidden">ACCUEIL</h1>
</div>