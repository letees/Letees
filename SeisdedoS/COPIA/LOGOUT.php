<?
session_start();
$_SESSION["permiso_s"];
$_SESSION=array();
session_destroy();
$url="Location:home.html";
header($url);
?> 
