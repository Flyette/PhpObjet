<?php 
include_once('config/autoload.php');

$c = isset($_GET['c']) ? $_GET['c'] : "CtrlContact";
$m = isset($_GET['m']) ? $_GET['m'] : "getForm";
$a = isset($_GET['a']) ? $_GET['a'] : "";

/**
 * Route
 */

$ctrl = new $c;
$ctrl->$m();

?>