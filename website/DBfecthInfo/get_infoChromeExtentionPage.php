<?php





include("Dbcon.php");
$sqlsetning="SELECT info, info_body, images FROM chromeextention WHERE id ='1';";		/* SQL-setning for å hente data fra Databasen */
$sqlResultat=mysqli_query($db,$sqlsetning) or die("Ikke mulig å hente data fra databasen");

$antallRader=mysqli_num_rows($sqlResultat);


for ($r=1; $r<=$antallRader; $r++)								/* for-løkke for å lese gjennom og skrive ut informasjonen i tabellen "oppgave" */
{
$rad=mysqli_fetch_array($sqlResultat);
$chromeApp=$rad["info"];
$appDescription=$rad["info_body"];
$appImages=$rad["images"];

echo("<p id='om'>$chromeApp</p>");
echo("<article>$appDescription</article>");
//echo("<article>$appImages</article>");
//echo("<p id='infoOmMeg'>$infoAboutMe</p>");

}