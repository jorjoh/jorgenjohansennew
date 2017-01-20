<?php
/*
	PHP image slideshow - auto version - PHP5
*/
// set the absolute path to the directory containing the images
define ('IMGDIR', 'images/chromeExtention/');
// same but for www
define ('WEBIMGDIR', 'images/chromeExtention/');
// set session name for slideshow "cookie"
define ('SS_SESSNAME', 'slideshow_sess');
// global error variable
$err = '';
// start img session
//session_name(SS_SESSNAME);
//session_start();
// init slideshow class
$ss = new slideshow($err);
if (($err = $ss->init()) != '')
{
   // header('HTTP/1.1 500 Internal Server Error');
    echo $err;
    exit();
}
// get image files from directory
$ss->get_images();
// set variables, done.
list($curr, $caption, $first, $prev, $next, $last) = $ss->run();
/*
	slideshow class, can be used stand-alone
*/
class slideshow
{
    private $files_arr = NULL;
    private $err = NULL;

    public function __construct(&$err)
    {
        $this->files_arr = array();
        $this->err = $err;
    }
    public function init()
    {
        // run actions only if img array session var is empty
        // check if image directory exists
        if (!$this->dir_exists())
        {
            return 'Error retrieving images, missing directory';
        }
        return '';
    }
    public function get_images()
    {
        // run actions only if img array session var is empty
        if (isset($_SESSION['imgarr']))
        {
            $this->files_arr = $_SESSION['imgarr'];
        }
        else
        {
            if ($dh = opendir(IMGDIR))
            {
                while (false !== ($file = readdir($dh)))
                {
                    if (preg_match('/^.*\.(jpg|jpeg|gif|png)$/i', $file))
                    {
                        $this->files_arr[] = $file;
                    }
                }
                closedir($dh);
            }
            $_SESSION['imgarr'] = $this->files_arr;
        }
    }
    public function run()
    {
        $curr = 1;
        $last = count($this->files_arr);
        if (isset($_GET['img']))
        {
            if (preg_match('/^[0-9]+$/', $_GET['img'])) $curr = (int)  $_GET['img'];
            if ($curr <= 0 || $curr > $last) $curr = 1;
        }
        if ($curr <= 1)
        {
            $prev = $curr;
            $next = $curr + 1;
        }
        else if ($curr >= $last)
        {
            $prev = $last - 1;
            $next = $last;
        }
        else
        {
            $prev = $curr - 1;
            $next = $curr + 1;
        }
        // line below sets the caption name...
        $caption = str_replace('-', ' ', $this->files_arr[$curr - 1]);
        $caption = str_replace('_', ' ', $caption);
        $caption = preg_replace('/\.(jpg|gif|png)$/i', '', $caption);
        $caption = ucfirst($caption);
        return array($this->files_arr[$curr - 1], $caption, 1, $prev, $next, $last);
    }
    private function dir_exists()
    {
        return file_exists(IMGDIR);
    }

}
//session_destroy();
//<?=//$caption;
?>


<title>Slideshow</title>
<style type="text/css">
    body{margin: 0;padding: 0;font: 100% "Myriad Pro","Segoe UI", Arial, Helvetica, sans-serif;font-size: 16px;}
    div#gallery{width: 600px;margin: 0 auto;text-align: center;}
    div#gallery img{border: 2px #004694 solid;}
    div#gallery p{color: #004694;}
    div#gallery div.pn{padding: 10px;}
    div.pn{
        position: relative;
        border: solid 1px #FFF;
        width: 150px;
        height: 14px;
        left: 200px;
    }

    a#a-tag{
        position: relative;
        text-align: center;
        left: 20px;
    }
    a:hover{color:#cc0000;}
    a.sp{padding-right: 40px;}
</style>

<body>
<div id="gallery">
    <!-- <p>//</p> -->
    <img src="<?=WEBIMGDIR;?><?=$curr;?>" alt="<?=$caption;?>" />

    <div class="pn">
        <a id="a-tag" href="?img=<?=$next;?>">Next</a> <a id="a-tag" href="?img=<?=$prev;?>" class="sp">| Previous</a>
    </div>
</div>
