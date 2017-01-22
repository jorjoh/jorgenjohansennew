<?php
/**
 * Created by PhpStorm.
 * User: Jørgen Johansen
 * Date: 22.01.2017
 * Time: 20:37
 */

    //Deklarerer variabler som brukes i kontakt skjemaet
    $name = $_POST["name"];
    $eMAil = $_POST["eMail"];
    $message = $_POST["message"];
    $subject_msg = $_POST["subject"];
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
            header('refresh: 4; url=index.html');
            $eMail = $_POST["eMail"];
            $to = "post@jorgenjohansen.no";
            $subject = $subject_msg;
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