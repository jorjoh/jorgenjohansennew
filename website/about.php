<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link href="Styles/styleswebpage.css" rel="stylesheet" type="text/css">
    <title>J&oslashrgen Johansen</title>

    <script src="Script/jquery-1.11.1.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $(".faceBookLink").fadeIn(6000);
            $(".menuHandler").animate({opacity: '1', fontSize: "32pt"});

        });
    </script>

</head>

<body>
<?php include_once("analyticstracking.php") ?>
<div id="content">
    <hr id="stroke">
    <article> <?php include("DBfecthInfo/get_infoAboutPage.php"); ?></article>
    <!-- Facebook Badge START -->
    <br/><a href="https://www.facebook.com/JorgenJohansen93" title="J&#xf8;rgen Johansen" target="_TOP"
            class="faceBookLink">
        <!-- <p id="stuideSted">Student ved HÃ¸gksolen i Buskerud og Velstfold</p>
         <p id="stuide">Informasjonssystemer og IT-ledelse</p> -->
        <div id="social" style="display: inline">
            <a href="https://no.linkedin.com/in/jørgen-johansen-06046970" target="_blank">
                <img src="images/linkedin.png">
            </a>
            <a href="https://www.facebook.com/JorgenJohansen93" target="=_blank"> <img src="images/facebook.PNG"> </a>
            <a href="https://github.com/jorjoh" target="_blank"> <img src="images/gitHubLogo.png"></a>
        </div>

        <?php include "Functions/menu.php" ?>

</div>
<footer><?php include("DBfecthInfo/rettigheterTilSide.php"); ?></footer>
</body>

</html>