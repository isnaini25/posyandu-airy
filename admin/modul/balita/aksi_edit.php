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
$id=$_POST['kode_balita'];
$queryUbah =mysqli_query($koneksi,"UPDATE tbl_balita SET namaBalita='$namaBalita', kode_ibubalita='$namaIbu', jenkel='$jenkel', TTL='$ttl', anak_ke='$anakke',Tb_lahir='$tb',Bb_lahir='$bb' WHERE kode_balita='$id'");

if ($queryUbah) {
	echo "<script> alert ('DATA BALITA BERHASIL DI UBAH'); window.location='$admin_url'+'adminweb.php?modul=balita';</script>";
} else { 
	echo "<script> alert('Data balita gagal di ubah'); window.location = '$admin_url'+'adminweb.php?modul=edit_balita';</script>";
}
 ?>