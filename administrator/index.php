<?php
if (!isset($_SESSION)) session_start();
error_reporting(E_ALL);
ob_start();
ini_set('display_errors', 1);
date_default_timezone_set("Asia/Bangkok");

include_once("../plugin/thaidate/Okvee/Thaidate/Thaidate.php");
include_once("../plugin/thaidate/Okvee/Thaidate/thaidate-functions.php");
include_once("../htaccess.php");
$ASSETS_URL = "../";

$userID = isset($_SESSION['adminauth']['id']) ? $_SESSION['adminauth']['id'] : null;
if ($userID){

	include_once("../app/admin.php");
}else{
	include_once("../app/auth.php");
}
?>
