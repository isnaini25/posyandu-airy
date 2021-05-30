<?php 
session_start();

include "lib/config.php";
include "lib/koneksi.php";

$idCustomer = $_POST['id_customer'];
$Username = $_POST['username'];
$Password = md5($_POST['password']);
$Nama = $_POST['nama'];
$Email = $_POST['email'];
$Notelp =$_POST['notelp'];
$Alamat = $_POST['alamat'];
$idKota = $_POST['idKota'];



$password = trim($Password);
$nama = trim($Nama);
$email = trim($Email);
$alamat = trim($Alamat);
$notelp = trim($Notelp);


$queryCekPass = mysqli_query($koneksi, "SELECT * FROM tbl_customer WHERE id_customer ='$idCustomer' AND password='$Password'");

$hsl = mysqli_num_rows($queryCekPass);

if ($hsl > 0) {
	
	if($password==""){
		echo"<script> alert('Data Password Tidak Boleh kosong'); window.location ='profil.php?id_customer=$idCustomer';</script>";
	}elseif($nama==""){
		echo"<script> alert('Data Nama Tidak Boleh kosong'); window.location ='profil.php?id_customer=$idCustomer';</script>";
	}elseif($email==""){
		echo"<script> alert('Data Email Tidak Boleh kosong'); window.location ='profil.php?id_customer=$idCustomer';</script>";
	}elseif($alamat==""){
		echo"<script> alert('Data Alamat Tidak Boleh kosong'); window.location ='profil.php?id_customer=$idCustomer';</script>";
	}elseif($notelp==""){
		echo"<script> alert('Data Telepon Tidak Boleh kosong'); window.location = 'form_daftar.php';</script>";
	} else{
		$queryEdit = mysqli_query($koneksi, "UPDATE tbl_customer SET nama='$Nama', email='$Email', alamat='$Alamat'  ,id_kota='$idKota' , notelp = '$Notelp'  WHERE id_customer='$idCustomer'");
		if($queryEdit){
			
			echo"<script >alert('Data Berhasil Diubah'); window.location ='profil.php?id_customer=$idCustomer';</script>	";
		}else{
			echo"<script >alert('Data Customer Gagal Diubah'); window.location ='profil.php?id_customer=$idCustomer';</script>	";
		}
	}
}else{


echo"<script> alert('Password Salah');window.location ='profil.php?id_customer=$idCustomer';</script>";
	
}

?>