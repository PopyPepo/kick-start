<?php
if (!isset($_SESSION)) session_start();
error_reporting(E_ALL);
ob_start();
ini_set('display_errors', 1);
date_default_timezone_set("Asia/Bangkok");
$FORDER = "/x-home";

include_once("./plugin/thaidate/Okvee/Thaidate/Thaidate.php");
include_once("./plugin/thaidate/Okvee/Thaidate/thaidate-functions.php");
include_once("./htaccess.php");


include_once("./app/".$LAYOUT.".php");
?>
