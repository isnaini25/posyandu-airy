<?php 
include "../../../lib/config.php";
include "../../../lib/koneksi.php";

$id=$_GET['id_admin'];

$queryHapus = mysqli_query($koneksi, "DELETE FROM tbl_kader WHERE kode_kader='$id'");
if ($queryHapus) {
	echo "<script> alert ('DATA kader BERHASIL di hapus'); window.location='$admin_url'+'adminweb.php?modul=kader';</script>";
} else { 
	echo "<script> alert('Data kader gagal di hapus'); window.location = '$admin_url'+'adminweb.php?modul=kader';</script>";
}

?>