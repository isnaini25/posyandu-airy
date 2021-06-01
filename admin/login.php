<?php 
include "../lib/koneksi.php";
$username = $_POST['username'];
$pass = $_POST['password'];

$login = mysqli_query($koneksi, "SELECT * FROM tbl_kader WHERE username='$username' AND password='$pass'" );
	$ketemu = mysqli_num_rows($login);
	$r = mysqli_fetch_array($login);

	if($ketemu > 0 ){
		session_start();
		
		$_SESSION['namauser'] = $r['username'];
		$_SESSION['password'] = $r['password'];
        $_SESSION['level']='admin';
        
		header('location:adminweb.php');
	}else{
		echo $pass;
		exit();
        echo "<script>alert ('Password salah!'); window.location ='$admin_url';</script>";
        
    }


 ?>
