<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/***************** Configuration *****************/

// Enter your email, where you want to receive the messages.
$contact_email_to = "post@jorgenjohansen.no";

// Subject prefix
$contact_subject_prefix = "Du har fått en melding fra kontaksskjemaet: ";

// Name too short error text
$contact_error_name = "Navnet er for kort eller tomt!";

// Email invalid error text
$contact_error_email = "Vennligst skriv inn en korrekt e-post!";

// Subject too short error text
$contact_error_subject = "Emnet er for kort eller tomt!";

// Message too short error text
$contact_error_message = "For kort melding, vennligst skriv noe!";

/*********************/

/*if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
    // The Request must be Ajax POST, enter a message for direct access requests.
    die('Invalid Request!');
}*/

//if( isset($_POST) ) {
  $name= "Jørgen";
  $email = "test@test.com";
  $subject = "Dette er et langt emne som ikke tar slutt";
  $message = "Heo, dette er en test melding";

  /*  $name = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $subject = filter_var($_POST["subject"], FILTER_SANITIZE_STRING);
    $message = filter_var($_POST["message"], FILTER_SANITIZE_STRING);*/

    if(strlen($name)<4){
        die($contact_error_name);
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        die($contact_error_email);
    }

    if(strlen($message)<3){
        die($contact_error_subject);
    }

    if(strlen($message)<3){
        die($contact_error_message);
    }

    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

    // Additional headers
    $headers .= 'From: Ole Reidar Holm <holm@olereidar.com>' . "\r\n";
    $headers .= 'Reply-To: ' . $email . " \r\n";

    $message = "
<html>
<head>
    <meta charset='utf-8'>
    <title>Du har fått en melding fra kontaktskjemaet.</title>
</head>
<body>
    <style>body {font-family:Helvetica Neue,Helvetica,Arial,sans-serif;font-style:normal;}h1{font-size:24px;}h2{font-size:18px;}h3{font-size:16px;}p{font-size:14px;}i{font-size:10px;}#container{width:350px;}.msg{border:solid 1px #eee;padding: 0 10px;}</style>
    <div id='container'>
        <h1>Du har fått en melding fra kontaktskjemaet:</h1>
        <div class='msg'>
            <h2>Fra: ". $name ." (". $email .")</h2>
            <h3>Emne: ". $subject ."</h3>
            <p>". $message ."</p>
        </div>
        <br>
        <i>Du kan svare direkte på denne e-posten. </i>
    </div>
</body>
</html>
";

    $sendemail = mail($contact_email_to, '=?utf-8?B?'.base64_encode($contact_subject_prefix . $subject).'?=', $message,'From: you@example.com');

    if( $sendemail ) {
        echo 'OK';
    } else {
      print_r(error_get_last());
        echo 'Could not send mail! Please check your PHP mail configuration.';
    }
//}
?>
