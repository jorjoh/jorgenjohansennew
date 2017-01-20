<?php
/**
 * Created by PhpStorm.
 * User: Jørgen Johansen
 * Date: 27.09.15
 * Time: 21:38
 */
include("Dbcon.php");
$sqlsetning="SELECT id, infoOmMeg FROM om WHERE id = 5;";		/* SQL-setning for å hente data fra databasen */
$sqlResultat=mysqli_query($db,$sqlsetning) or die("Ikke mulig å hente data fra databasen + copy!!");

$antallRader=mysqli_num_rows($sqlResultat); // Sender resultatet inn til variabelen antallRader


for ($r=1; $r<=$antallRader; $r++)		/* for-løkke for å lese gjennom og skrive ut informasjonen i tabellen "om" */
{
    $rad=mysqli_fetch_array($sqlResultat);
    // $about=$rad["title"];
    $rettigheterTilSide=$rad["infoOmMeg"];  //Putter informasjonen fra databsen innt til varriabelen
    $rettigheterTilSidePlussEkstra=$rad["infoOmMeg"];  //Putter informasjonen fra databsen innt til varriabelen

    // echo("<p id='om'>$about</p>");
    //echo("$rettigheterTilSide");   //skriver ut resultatet til footer på html-siden

}

$date = "Copyright &copy; " .date("Y ");
$textToDate = "designet av <a href=\"mailto:post@jorgenjohansen.no?Subject=\" target=\"_top\">J&oslash;rgen Johansen</a>";
echo ($date.$textToDate);


