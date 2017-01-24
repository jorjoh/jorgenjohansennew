<?php
/**
 * Created by PhpStorm.
 * User: Jørgen Johansen
 * Date: 23.01.2017
 * Time: 18:58
 */

$to      = 'post@jorgenjohansen.no';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
echo "Script gjennomkjørt";
