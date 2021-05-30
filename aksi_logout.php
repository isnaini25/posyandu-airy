<?php 
session_start();

$_SESSION['idIbubalita'] = '';
unset($_SESSION['idIbubalita']);


session_unset();
session_destroy();
header("location:index.php");
 ?>