<?php 
include "lib/config.php";
include "lib/koneksi.php";

$Username = $_POST['username'];
$Password = md5($_POST['password']);
$Nama = $_POST['nama'];
$Suami = $_POST['suami'];
$Tgl =$_POST['tgl'];


$username  = trim($Username);
$password = trim($Password);
$nama = trim($Nama);
$suami = trim($Suami);
$tgl = trim($Tgl);


$queryCekUsername = mysqli_query($koneksi, "SELECT username from tbl_ibubalita WHERE username = '$Username'");

$jmlusername = mysqli_num_rows($queryCekUsername);

if ($jmlusername > 0) {
	echo"<script> alert('Username Sudah Digunakan, Silahkan Gunakan Username yang Lain');window.location = 'form_daftar.php';</script>";
}
else{
	if($username==""){
		echo"<script> alert('Data Username Tidak Boleh kosong');window.location = 'form_daftar.php';</script>";
	}elseif($password==""){
		echo"<script> alert('Data Password Tidak Boleh kosong'); window.location = 'form_daftar.php';</script>";
	}elseif($nama==""){
		echo"<script> alert('Data Nama Tidak Boleh kosong'); window.location = 'form_daftar.php';</script>";
	}elseif($suami==""){
		echo"<script> alert('Data Email Tidak Boleh kosong'); window.location = 'form_daftar.php';</script>";
	}elseif($tgl==""){
		echo"<script> alert('Data Alamat Tidak Boleh kosong'); window.location = 'form_daftar.php';</script>";
	}
	else{
		$querySimpan = mysqli_query($koneksi, "INSERT INTO tbl_ibubalita (username,password,namaIbu,namaSuami,tglPendaftaran ) VALUES ('$Username','$Password','$Nama','$Suami','$Tgl' )" );

		if ($querySimpan) {

			$queryLogin = mysqli_query($koneksi, "SELECT * FROM tbl_ibubalita WHERE username ='$Username' AND password='$Password'");
			$resultQuery = mysqli_num_rows($queryLogin);

			$result = mysqli_fetch_array($queryLogin);

			if($resultQuery>0){
				session_start();

				$_SESSION['idIbubalita'] = $result['kode_ibubalita'];

				echo "<script> alert('Selamat Anda Sudah Terdaftar'); window.location = 'index.php';</script>";
			}
		}else{
			echo "<script> alert('Yahh gagal daftar'); window.location = 'form_daftar.php';</script>";
		}
	}
}


?> 
