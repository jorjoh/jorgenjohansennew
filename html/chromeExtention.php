<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <link href="Styles/styleswebpage.css" rel="stylesheet" type="text/css">
    <title>J&oslashrgen Johansen</title>

    <script src="Script/jquery-1.11.1.js"></script>
    <script>
        $(document).ready(function () {
            $(".menuHandler").animate({opacity: '1', fontSize: "32pt"});
        });
    </script>
</head>
<body>
<?php include_once("analyticstracking.php") ?>

<div id="content">
    <hr id="stroke">  <p id='om'>VKT -  Chrome extension</p>  <article>Dette er en enklere utgave av reiseplanleggeren til VKT sine busstopp. Denne extensionen har jeg utviklet som en del av interessen min for forskjellig mÃ¥ter Ã¥ fremstille informasjon pÃ¥. Extensionen er programmert primÃ¦rt i javascript sammen med litt CSS for Ã¥ style det opp. Applikasjonen er fortsatt under utvikling, men har dog en fungerende versjon kjÃ¸rende tilgjengelig for testere. Til hÃ¸yre finnes det noen bilder som viser funksjonen til "VKT-appen". \n<br/>\nInformasjonen som vises er hentet "live" fra vkt.no sin ruteplanlegger, som sÃ¸rger for alltid oppdatert informasjon.\n<br/>\n<br/>\nMÃ¥let er jo tilslutt at jeg fÃ¥r den ferdig og publisert i chrome extension store, slik at flest mulig kan utnytte, etter min mening, en litt enklere mÃ¥te Ã¥ finne busstider, varighet og evt. hvor mange bussbytter som er nÃ¸dvendig.\n'</article>
    <?php /*include("DBfecthInfo/get_infoChromeExtentionPage.php");*/ ?>
    <div id="bildekarrusel"><?php include("pictureCarrusel.php"); ?></div>

    <!-- <p id="stuideSted">Student ved Høgksolen i Buskerud og Velstfold</p>
     <p id="stuide">Informasjonssystemer og IT-ledelse</p> -->

    <?php include "Functions/menu.php" ?>

</div>

<footer><?php include("DBfecthInfo/rettigheterTilSide.php");?></footer>
</body>
</html>