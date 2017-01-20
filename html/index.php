<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <link href="Styles/styleswebpage.css" rel="stylesheet" type="text/css">
    <title>J&oslashrgen Johansen</title>
    <script src="Script/jquery-1.11.1.js"></script>
    <script src="Script/script.js"></script>
</head>
<body>
<?php include_once("analyticstracking.php") ?>
<div id="content" hidden>

    <hr id="stroke">
    <p id="name"> JØRGEN JOHANSEN </p>
    <p id='stuideSted'>Universitetet i Agder</p>
    <p id='studie'> Master i Informasjonssystemer </p>

    <!--<div id="clientInfo">
    <p id="userStats">
        <?php
/*        error_reporting(0);
        echo "Hello! <br/> Your Public IP-adress is: <br/>";
        $ip = $_SERVER['REMOTE_ADDR'];
        echo $ip;
        echo "<br/>";
        echo "Using this platform:<br/>";

        $ua=getBrowser();
        if($ua['name']=='Google Chrome'){
            $yourbrowser= "Your browser: ";
            echo ("<img src='chrome32.png'>");
            $yourVersion=  "<br/> Running version: " .$ua['version'];
            echo($yourbrowser.$yourVersion);
            //. " on " .$ua['platform'] . " reports: <br >" . $ua['userAgent'];



        }
        else{
            $yourbrowser= "Your browser: " . $ua['name'] . " " . $ua['version'];
            print_r($yourbrowser. "if check failed");
        }



        */?></p>
    </div>-->

    <?php include "Functions/menu.php" ?>

</div>

<footer>
    <?php include("DBfecthInfo/rettigheterTilSide.php"); ?>
</footer>
</body>
</html>

<?php
function getBrowser()
{
    $u_agent = $_SERVER['HTTP_USER_AGENT'];
    $bname = 'Unknown';
    $platform = 'Unknown';
    $version= "";

    //First get the platform?
    if (preg_match('/linux/i', $u_agent)) {
        $platform = 'linux';
    }
    elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
        $platform = 'mac';
    }
    elseif (preg_match('/windows|win32/i', $u_agent)) {
        $platform = 'windows';
    }

    // Next get the name of the useragent yes seperately and for good reason
    if(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent))
    {
        $bname = 'Internet Explorer';
        $ub = "MSIE";
    }
    elseif(preg_match('/Firefox/i',$u_agent))
    {
        $bname = 'Mozilla Firefox';
        $ub = "Firefox";
    }
    elseif(preg_match('/Chrome/i',$u_agent))
    {
        $bname = 'Google Chrome';
        $ub = "Chrome";
    }
    elseif(preg_match('/Safari/i',$u_agent))
    {
        $bname = 'Apple Safari';
        $ub = "Safari";
    }
    elseif(preg_match('/Opera/i',$u_agent))
    {
        $bname = 'Opera';
        $ub = "Opera";
    }
    elseif(preg_match('/Netscape/i',$u_agent))
    {
        $bname = 'Netscape';
        $ub = "Netscape";
    }

    // finally get the correct version number
    $known = array('Version', $ub, 'other');
    $pattern = '#(?<browser>' . join('|', $known) .
        ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
    if (!preg_match_all($pattern, $u_agent, $matches)) {
        // we have no matching number just continue
    }

    // see how many we have
    $i = count($matches['browser']);
    if ($i != 1) {
        //we will have two since we are not using 'other' argument yet
        //see if version is before or after the name
        if (strripos($u_agent,"Version") < strripos($u_agent,$ub)){
            $version= $matches['version'][0];
        }
        else {
            $version= $matches['version'][1];
        }
    }
    else {
        $version= $matches['version'][0];
    }

    // check if we have a number
    if ($version==null || $version=="") {$version="?";}

    return array(
        'userAgent' => $u_agent,
        'name'      => $bname,
        'version'   => $version,
        'platform'  => $platform,
        'pattern'    => $pattern
    );
}

?>
