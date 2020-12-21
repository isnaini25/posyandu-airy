 <?php 
	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";


$namaBalita=$_POST['namaBalita'];
$kueri = mysqli_query($koneksi, "SELECT * FROM tbl_balita WHERE kode_balita= '$namaBalita'");
while ($res=mysqli_fetch_array($kueri)) {

$tanggal1 = new DateTime($res['TTL']);
$tanggal2 = new DateTime();
$perbedaan = $tanggal2->diff($tanggal1)->format("%a");
}
$tb=$_POST['tb'];
$bb=$_POST['bb'];
$querySimpan =mysqli_query($koneksi,"INSERT INTO tbl_penimbangan(kode_balita,usiaPerminggu,tinggiBadan,beratBadan)VALUES('$namaBalita','$perbedaan','$tb','$bb')");
if ($querySimpan) {
	echo "<script> alert ('DATA PENIMBANGAN BERHASIL MASUK'); window.location='$admin_url'+'adminweb.php?modul=penimbangan&id_balita=$namaBalita';</script>";
} else { 
	echo "<script> alert('Data PENIMBANGAN gagal dimasukkan'); window.location = '$admin_url'+'adminweb.php?modul=tambah_penimbangan';</script>";
}
?>