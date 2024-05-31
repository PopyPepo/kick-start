<?php
# Difine
define("_DIR",str_replace('\\', '/', dirname(__FILE__)));


$LAYOUT = isset($_GET['page']) ? $_GET['page'] : "home";
$LINK_URL = './?rount=';
$ASSETS_URL = "./";

$rount = isset($_GET["rount"]) && $_GET["rount"] ? $_GET["rount"] : 'layout/main';
$rount = explode("/",$rount);

$DOMAIN = isset($rount[0]) ? $rount[0] : 'layout';
$ACTION = isset($rount[1]) ? $rount[1] : ($rount[0]=='layout' ? 'main' : 'index');
$ID = isset($rount[2]) ? $rount[2] : null;

$LANG = isset($_SESSION['LANG']) ? $_SESSION['LANG'] : "Th";
?>