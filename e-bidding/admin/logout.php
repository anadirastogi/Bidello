<?php
session_start(); 
$_SESSION["authenticated"]==false;
header('Location: admin.php');

?>
