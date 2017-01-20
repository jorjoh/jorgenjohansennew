<?php
/**
 * Created by PhpStorm.
 * User: Jørgen Johansen
 * Date: 24.09.15
 * Time: 14:51
 */

include("Dbcon.php");
$sqlsetning="SELECT * FROM information WHERE id ='1';";		/* SQL-setning for å hente data fra Databasen */
$sqlResultat=mysqli_query($db,$sqlsetning) or die("Ikke mulig å hente data fra databasen");

$antallRader=mysqli_num_rows($sqlResultat);


for ($r=1; $r<=$antallRader; $r++)								/* for-løkke for å lese gjennom og skrive ut informasjonen i tabellen "oppgave" */
{
    $rad=mysqli_fetch_array($sqlResultat);
    $name=$rad["Navn"];
    $studieSted=$rad["StudieSted"];
    $studie=$rad["Studie"];

    echo("<p id='name' hidden>$name</p>");
    echo("<p id='stuideSted' hidden>$studieSted</p>");
    echo("<p id='studie' hidden>$studie </p>");


}
