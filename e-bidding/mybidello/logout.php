<?php


session_start(); 
$_SESSION["authenticated"]=FALSE;

header ('Location: login.php?start=2&error=0&location=../index.php?start=0');

?>
