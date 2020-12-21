 <?php 
	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";


$namaBalita=$_POST['namaBalita'];
$namaIbu=$_POST['namaIbu'];
$jenkel=$_POST['jenkel'];
$ttl=$_POST['ttl'];
$anakke=$_POST['anakke'];
$tb=$_POST['tb'];
$bb=$_POST['bb'];
$querySimpan =mysqli_query($koneksi,"INSERT INTO tbl_balita(namaBalita,kode_ibubalita,jenkel,TTL,anak_ke,Tb_lahir,Bb_lahir)VALUES('$namaBalita','$namaIbu','$jenkel','$ttl','$anakke','$tb','$bb')");

if ($querySimpan) {
	echo "<script> alert ('DATA BALITA BERHASIL MASUK'); window.location='$admin_url'+'adminweb.php?modul=balita';</script>";
} else { 
	echo "<script> alert('Data balita gagal dimasukkan'); window.location = '$admin_url'+'adminweb.php?modul=tambah_balita';</script>";
}
 ?>