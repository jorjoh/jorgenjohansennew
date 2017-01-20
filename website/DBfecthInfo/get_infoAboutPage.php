<?php
/**
 * Created by PhpStorm.
 * User: Jørgen Johansen
 * Date: 24.09.15
 * Time: 21:45
 */

include("Dbcon.php");
$sqlsetning="SELECT title FROM om WHERE id ='1';";		/* SQL-setning for å hente data fra Databasen */
$sqlResultat=mysqli_query($db,$sqlsetning) or die("Ikke mulig å hente data fra databasen");

$antallRader=mysqli_num_rows($sqlResultat);


for ($r=1; $r<=$antallRader; $r++)								/* for-løkke for å lese gjennom og skrive ut informasjonen i tabellen "oppgave" */
{
    $rad=mysqli_fetch_array($sqlResultat);
    $about=$rad["title"];
    $infoAboutMe=$rad["infoOmMeg"];

    echo("<p id='om'>$about</p>");
    //echo("<p id='infoOmMeg'>$infoAboutMe</p>");

}

$sqlsetning="SELECT id, infoOmMeg FROM om WHERE id = 1 OR id = 2 OR id = 3 OR id = 4";		/* SQL-setning for å hente data fra Databasen */
$sqlResultat=mysqli_query($db,$sqlsetning) or die("Ikke mulig å hente data fra databasen");

$antallRader=mysqli_num_rows($sqlResultat);


for ($r=1; $r<=$antallRader; $r++)								/* for-løkke for å lese gjennom og skrive ut informasjonen i tabellen "oppgave" */
{
    $rad=mysqli_fetch_array($sqlResultat);
   // $about=$rad["title"];
    $infoAboutMe=$rad["infoOmMeg"];

   // echo("<p id='om'>$about</p>");
    echo("");
    echo("<meta charset='UTF-8'/> <article>$infoAboutMe</article>");

}
