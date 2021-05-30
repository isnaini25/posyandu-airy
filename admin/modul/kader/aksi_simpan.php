 <?php 
	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";


$username=$_POST['username'];
$password=$_POST['password'];
$nama=$_POST['nama'];
$email=$_POST['email'];
$querySimpan =mysqli_query($koneksi,"INSERT INTO tbl_kader (username,password,nama,email)VALUES('$username','$password','$nama','$email')");

if ($querySimpan) {
	echo "<script> alert ('DATA kader BERHASIL MASUK'); window.location='$admin_url'+'adminweb.php?modul=kader';</script>";
} else { 
	echo "<script> alert('Data kader gagal dimasukkan'); window.location = '$admin_url'+'adminweb.php?modul=form_tambah';</script>";
}
 ?>