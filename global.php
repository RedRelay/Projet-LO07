<?php

define('ROOT', __DIR__.'/');
define('ROOT_URL', "http://$_SERVER[HTTP_HOST]/Projet-LO07/");

require_once ROOT.'functions.php';

session_start();
if(isset($_SESSION['current-action']))  $_SESSION['last-action'] =  $_SESSION['current-action'];
$_SESSION['current-action'] = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

//$_SESSION['last-request'] = date();

require_once ROOT.'utils/flashbag.php';

?>