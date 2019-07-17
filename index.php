<?
$uri = explode('/', $_SERVER['REQUEST_URI']);
$view = "views/";

/* ------------------------------------------------------
        handle url:
        + /dev > gyroscope (plus hide the clock)
        + /thx > download
        + everything else > object-fullscreen
------------------------------------------------------ */

// show the things
require_once("views/head.php");
if ($uri[1] == "subscribe") {
    require_once("views/subscribe.php");    
}
require_once("views/title.php");    
require_once("views/main.php");
require_once("views/menu.php");
require_once("views/calendar.php");
require_once("views/foot.php");
?>
