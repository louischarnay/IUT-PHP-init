<?php include_once __DIR__."/../include/config.php"?>
<section id="coordonnées" data-aos="slide-left" data-aos-duration="1000" data-aos-easing="ease-out">
    <h2 id="titreHoraires">MES HORAIRES</h2>
    <table id="tabHoraire">
        <thead>
        <tr><th colspan="4" id="thHoraires"> </th></tr>
        </thead>
        <tbody>
        <tr><th class="ligneHaut">9h / 11h</th><th class="ligneHaut">11h / 14h</th><th class="ligneHaut">14h / 17h</th><th class="ligneHaut">17h / 21h</th></tr>
        <tr><th class="ligne">Lundi</th><td class="ligne"><img src="img/refuse.png" alt="non" class="imgOui"></td><td class="ligne"><img src="img/valide.png" alt="oui" class="imgOui"></td><td class="ligne"><img src="img/valide.png" alt="oui" class="imgOui"></td></tr>
        <tr><th class="ligne">Mardi</th><td class="ligne"><img src="img/refuse.png" alt="non" class="imgNon"></td><td class="ligne"><img src="img/valide.png" alt="oui" class="imgOui"></td><td class="ligne"><img src="img/valide.png" alt="oui" class="imgOui"></td></tr>
        <tr><th class="ligne">Mercredi</th><td class="ligne"><img src="img/refuse.png" alt="non" class="imgNon"></td><td class="ligne"><img src="img/refuse.png" alt="non" class="imgNon"></td><td class="ligne"><img src="img/valide.png" alt="oui" class="imgOui"></td></tr>
        <tr><th class="ligne">Jeudi</th><td class="ligne"><img src="img/refuse.png" alt="non" class="imgNon"></td><td class="ligne"><img src="img/valide.png" alt="oui" class="imgOui"></td><td class="ligne"><img src="img/valide.png" alt="oui" class="imgOui"></td></tr>
        <tr><th class="ligne">Vendredi</th><td class="ligne"><img src="img/refuse.png" alt="non" class="imgNon"></td><td class="ligne"><img src="img/refuse.png" alt="non" class="imgNon"></td><td class="ligne"><img src="img/refuse.png" alt="non" class="imgNon"></td></tr>
        <tr><th class="ligne">Samedi</th><td class="ligne"><img src="img/valide.png" alt="oui" class="imgOui"></td><td class="ligne"><img src="img/valide.png" alt="oui" class="imgOui"></td><td class="ligne"><img src="img/valide.png" alt="oui" class="imgOui"></td></tr>
        </tbody>
    </table>
    <h2 id="titreTrouvezMoi">TROUVEZ-MOI</h2>
    <div id="divTrouvezMoi">
        <div id="texteTouvezMoi">
            <p class="sousTitreTrouvezMoi">Email :</p>
            <p><?= MAIL?></p>
            <p class="sousTitreTrouvezMoi">Tel :</p>
            <p><?= NUMTEL?></p>
            <p class="sousTitreTrouvezMoi">Adresse :</p>
            <p><?= ADRESSE?></p>
        </div>
    </div>
</section>