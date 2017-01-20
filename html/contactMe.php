<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href="Styles/styleswebpage.css" rel="stylesheet" type="text/css">
    <title>J&oslashrgen Johansen</title>
    <style>

    </style>

    <script src="Script/jquery-1.11.1.js"></script>

</head>

<body>
<?php include_once("analyticstracking.php") ?>
<script type="text/javascript">


</script>
<script src="Script/script.js"></script>

<div id="content">

    <hr id="stroke">

    <article id="contact">
        <h1 id="contactHeader">Kontakt meg</h1>

        <form method="post" action="" name="contactSchema" id="contactSchema">
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
            <h2 id="contactDetails">Navn:</h2><input type="text" name="name" id="name" placeholder="Navn"
                                                     required=""><br/>

            <h2 id="contactDetails">E-post:</h2><input type="text" name="eMail" id="eMail" placeholder="Epost"
                                                       ><br/>

            <h2 id="contactDetails">Melding:</h2>
            <label for="melding">
                <textarea name="message" id="message" rows="11" cols="45" placeholder="Skriv inn melding her."
                          required=""></textarea>
            </label>
            <br/>
            <br/>
            <input type="submit" name="send" id="send" value="Send din melding" height="300px" width="150px">
        </form>
    </article>
    <?php
    //Deklarerer variabler som brukes i kontakt skjemaet
    $name = $_POST["name"];
    $eMAil = $_POST["eMail"];
    $message = $_POST["message"];
    $send = $_POST["send"];
    //Gjør en sjekk på om knappen er trykket, hvis ikke fade in - innholdet
    if (!(isset($_POST["send"]))) {
        echo("<script type='text/javascript'>
                $(document).ready(function() {
                $('article').fadeIn(3000);
                 });
              </script> ");
    }
    //hvis knappen er trykket på kjør koden under
    if ((isset($_POST["send"]))) {
        //Sjekk om feltene er tomme
        if ($name == "" || $eMAil == "" || $message == "") {
            //Skriv feilmedling
            echo("Et eller flere av feltene er tomme");

        } // Ta informasjonen i feltene på send på epost til designert konto
        else {
            header('refresh: 4; url=index.php');
            $eMail = $_POST["eMail"];
            $to = "post@jorgenjohansen.no";
            $subject = "Ny Email fra besøkende på domenet ditt";
            $header = "From: $eMail\n";
            $header .= "MIME-Version: 1.0\r\n";
            $header .= "Content-Type: text/plain; charset=utf-8\r\n";
            $header .= "X-Priority: 1\r\n";
            $messageMain = "En besøkende på nettsiden din har sendt deg følgende epost:\n $eMail med melding:\n $message";
            $user = "$eMail";
            $user_message = "$message";
            $usersubject = "Thank You";
            $userheaders = "From: you@youremailaddress.com\n";
            $usermessage = "Thank you for subscribing to our mailing list.";
            mail($to, $subject, $messageMain, $header, $message);
            // mail($user,$user_message,$usersubject,$usermessage,$userheaders);

            echo("<p id ='sucsess'>Meldingen din er nå sendt!</p>");
            echo("<p id ='sucsess_redirect'>Du sendes nå tilbake til forsiden</p>");

            echo("<script type='text/javascript'>
                $(document).ready(function() {
                $('article').fadeOut(3000);
                 });
              </script> ");


        }
    }

    ?>

    <!-- <p id="stuideSted">Student ved Høgksolen i Buskerud og Velstfold</p>
     <p id="stuide">Informasjonssystemer og IT-ledelse</p> -->


    <?php include "Functions/menu.php" ?>
</div>
<footer><?php include("DBfecthInfo/rettigheterTilSide.php"); ?></footer>

</body>

</html>




















