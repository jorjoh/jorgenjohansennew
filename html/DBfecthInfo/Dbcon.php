<?php
/**
 * Created by PhpStorm.
 * User: Jørgen Johansen
 * Date: 24.09.15
 * Time: 14:57
 */

$host="jorgenjohansen.no.mysql";
$user="jorgenjohansen_";
$password="Juvaj56R";
$database="jorgenjohansen_";
$db=mysqli_connect($host, $user, $password, $database) or die ("ikke mulig å koble til databasen");
mysqli_set_charset($db, 'UTF8');

