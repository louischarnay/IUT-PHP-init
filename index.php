<?php session_start();?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.8">
    <title>Index</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
<?php
include "class/db.php";
include 'modules/banner.php';
include 'modules/header.php';

//$db1 = new db();
//$db1->connection();
//$db1->dateUpdate();
//$db1->hashPasswords();

?>
<main>
    <h2 data-aos="slide-right" data-aos-duration="1000" data-aos-easing="ease-out">PRESENTATION</h2>
    <p class="center"><em>Lorem ipsum</em> dolor sit amet, consectetur adipiscing elit. Maecenas odio enim, pellentesque ut vulputate quis,
        mollis efficitur urna. Curabitur ultrices nulla vel neque feugiat, ut auctor ligula accumsan. Mauris eros lacus,
        laoreet nec est vitae, vehicula scelerisque tortor. Phasellus quis quam sed augue dictum tincidunt ut id est.
        Ut gravida eros ut dapibus aliquam. Sed non blandit mauris. Nam volutpat lectus nec porttitor mollis.
        <em>Lorem ipsum</em> dolor sit amet, consectetur adipiscing elit. Mauris faucibus luctus est et mattis. Aenean at ullamcorper metus.
        Maecenas ac est suscipit odio sodales luctus eu ut velit. Nam convallis blandit sollicitudin. Duis blandit erat at.
    </p>
    <section id="paragraphesAccueil">
        <div id="fondCouleurAccueil"></div>
        <div id="paragrapheHTML" data-aos="fade-right" data-aos-duration="1000">
            <img src="img/logo_html.png" alt="logo HTML" class="imgAccueil" id="imgHTML">
            <h2>HTML</h2>
            <p><abbr title="HyperText Markup Language">HTML</abbr> : <em>Lorem ipsum</em> dolor sit amet, consectetur adipiscing elit. Cras commodo justo pretium dolor lobortis sollicitudin.
                Donec commodo blandit metus in vehicula. Curabitur vestibulum, dui non hendrerit rutrum, metus augue venenatis orci,
                sit amet convallis nisi libero ac erat. Fusce nec pharetra leo. Donec ut nulla eu felis tempus blandit ac ut mi.
                Aenean mollis ligula nec ultrices imperdiet. Maecenas nec facilisis lectus.
            </p>
        </div>
        <div id="paragrapheCSS" data-aos="fade-up" data-aos-duration="1000">
            <img src="img/logo_css.png" alt="logo CSS" class="imgAccueil" id="imgCSS">
            <h2>CSS</h2>
            <p><abbr title="Cascading StyleSheet">CSS</abbr> : <em>Lorem ipsum</em> dolor sit amet, consectetur adipiscing elit. Cras commodo justo pretium dolor lobortis sollicitudin.
                Donec commodo blandit metus in vehicula. Curabitur vestibulum, dui non hendrerit rutrum, metus augue venenatis orci,
                sit amet convallis nisi libero ac erat. Fusce nec pharetra leo. Donec ut nulla eu felis tempus blandit ac ut mi.
                Aenean mollis ligula nec ultrices imperdiet. Maecenas nec facilisis lectus.
            </p>
        </div>
            <div id="paragrapheJS" data-aos="fade-left" data-aos-duration="1000">
            <img src="img/logo_js.png" alt="logo JS" class="imgAccueil" id="imgJS">
            <h2>JS</h2>
            <p><abbr title="JavaScript">JS</abbr> : <em>Lorem ipsum</em> dolor sit amet, consectetur adipiscing elit. Cras commodo justo pretium dolor lobortis sollicitudin.
                Donec commodo blandit metus in vehicula. Curabitur vestibulum, dui non hendrerit rutrum, metus augue venenatis orci,
                sit amet convallis nisi libero ac erat. Fusce nec pharetra leo. Donec ut nulla eu felis tempus blandit ac ut mi.
                Aenean mollis ligula nec ultrices imperdiet. Maecenas nec facilisis lectus.
            </p>
        </div>
    </section>
    <h2 data-aos="slide-right" data-aos-duration="1000" data-aos-easing="ease-out">A PROPOS</h2>
    <p>
    <p class="center"><em>Lorem ipsum</em> dolor sit amet, consectetur adipiscing elit. Maecenas odio enim, pellentesque ut vulputate quis,
        mollis efficitur urna. Curabitur ultrices nulla vel neque feugiat, ut auctor ligula accumsan. Mauris eros lacus,
        laoreet nec est vitae, vehicula scelerisque tortor. Phasellus quis quam sed augue dictum tincidunt ut id est.
        Ut gravida eros ut dapibus aliquam. Sed non blandit mauris. Nam volutpat lectus nec porttitor mollis.
        <em>Lorem ipsum</em> dolor sit amet, consectetur adipiscing elit. Mauris faucibus luctus est et mattis. Aenean at ullamcorper metus.
        Maecenas ac est suscipit odio sodales luctus eu ut velit. Nam convallis blandit sollicitudin. Duis blandit erat at.<br><em>Lorem ipsum</em> dolor sit amet, consectetur adipiscing elit. Maecenas odio enim, pellentesque ut vulputate quis,
        mollis efficitur urna. Curabitur ultrices nulla vel neque feugiat, ut auctor ligula accumsan. Mauris eros lacus,
        laoreet nec est vitae, vehicula scelerisque tortor. Phasellus quis quam sed augue dictum tincidunt ut id est.
        Ut gravida eros ut dapibus aliquam. Sed non blandit mauris. Nam volutpat lectus nec porttitor mollis.
        <em>Lorem ipsum</em> dolor sit amet, consectetur adipiscing elit. Mauris faucibus luctus est et mattis. Aenean at ullamcorper metus.
        Maecenas ac est suscipit odio sodales luctus eu ut velit. Nam convallis blandit sollicitudin. Duis blandit erat at.
    </p>
</main>
<?php include 'modules/footer.php'?>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script src="js/script.js"></script>
</body>
</html>
