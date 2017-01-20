<?php
/**
 * Created by PhpStorm.
 * User: J�rgen Johansen
 * Date: 10.10.2015
 * Time: 22:25
 */
@session_start();
ob_start();
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8"/>
    <link href="Styles/styleswebpage.css" rel="stylesheet" type="text/css">
    <title>J&oslashrgen Johansen</title>
    <style>
        img#pic1 {
            top: 10%;
            left: 5%;
            width: 1024px;
            height: 500px;
            position: relative;
        }

    </style>
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
       <p id="name"></p>
        <img src="images/Under-Construction.jpg" id="pic1">
        <?php

        header('refresh: 3; url=index.php');
        ?>

        <!-- <p id="stuideSted">Student ved H�gksolen i Buskerud og Velstfold</p>
         <p id="stuide">Informasjonssystemer og IT-ledelse</p> -->

        <?php include "Functions/menu.php" ?>
    </div>

<footer><?php include("DBfecthInfo/rettigheterTilSide.php"); ?></footer>

</body>

</html>





















