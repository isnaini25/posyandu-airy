<?php 
include "../../../lib/config.php";
include "../../../lib/koneksi.php";

$id=$_GET['id_ibu'];

$queryHapus = mysqli_query($koneksi, "DELETE FROM tbl_ibubalita WHERE kode_ibubalita='$id'");
if ($queryHapus) {
	echo "<script> alert ('DATA ibubalita BERHASIL di hapus'); window.location='$admin_url'+'adminweb.php?modul=ibu';</script>";
} else { 
	echo "<script> alert('Data ibubalita gagal di hapus'); window.location = '$admin_url'+'adminweb.php?modul=ibu';</script>";
}

?>