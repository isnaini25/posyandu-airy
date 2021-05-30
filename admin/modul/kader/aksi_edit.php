<?php 
include "../../../lib/config.php";
include "../../../lib/koneksi.php";


$username=$_POST['username'];
$password=$_POST['password'];
$nama=$_POST['nama'];
$email=$_POST['email'];
$id=$_POST['kode_kader'];
$queryUbah = mysqli_query($koneksi,"UPDATE tbl_kader SET username = '$username', password ='$password', nama ='$nama', email = '$email' WHERE kode_kader = '$id'");

if ($queryUbah) {
	echo "<script> alert ('DATA kader BERHASIL Diubah'); window.location='$admin_url'+'adminweb.php?modul=kader';</script>";
} else { 
	echo "<script> alert('Data kader gagal di ubah'); window.location = '$admin_url'+'adminweb.php?modul=edit_kader';</script>";
}
?>