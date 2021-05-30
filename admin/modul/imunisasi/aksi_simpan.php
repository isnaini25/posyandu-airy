 <?php 
	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";


$kode_balita=$_POST['kode_balita'];
$beda=$_POST['usiaPerbulan'];
$imunisasi=$_POST['imunisasi'];
$querySimpan =mysqli_query($koneksi,"INSERT INTO tbl_imunisasi(kode_balita,usiaPerbulan,imunisasi)VALUES('$kode_balita','$beda','$imunisasi')");
if ($querySimpan) {
	echo "<script> alert ('DATA IMUNISASI BERHASIL MASUK'); window.location='$admin_url'+'adminweb.php?modul=imunisasi&id_balita=$kode_balita';</script>";
} else { 
	echo "<script> alert('Data imunisasi gagal dimasukkan'); window.location = '$admin_url'+'adminweb.php?modul=tambah_imunisasi';</script>";
}
?>