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
    <hr id="stroke">
    <article>  <?php include("DBfecthInfo/get_infoChromeExtentionPage.php"); ?> </article>
    <div id="bildekarrusel"><?php include("pictureCarrusel.php"); ?></div>

    <!-- <p id="stuideSted">Student ved Høgksolen i Buskerud og Velstfold</p>
     <p id="stuide">Informasjonssystemer og IT-ledelse</p> -->

    <?php include "Functions/menu.php" ?>

</div>

<footer><?php include("DBfecthInfo/rettigheterTilSide.php");?></footer>
</body>
</html>




















