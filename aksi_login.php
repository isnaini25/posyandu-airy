<?php 
include "lib/koneksi.php";
include "lib/config.php";


$username = $_POST['username'];
$password = ($_POST['password']);

$queryLogin = mysqli_query($koneksi, "SELECT * FROM tbl_ibubalita WHERE username ='$username' AND password='$password'");
$resultQuery = mysqli_num_rows($queryLogin);

$result = mysqli_fetch_array($queryLogin);

if($resultQuery>0){
	session_start();

	$_SESSION['idIbubalita'] = $result['kode_ibubalita'];

header("location:index.php");

}else{

	echo "<script> alert('Username atau Password Tidak Valid'); window.location = 'form_login.php';</script>";
} ?>

