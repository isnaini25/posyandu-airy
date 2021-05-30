 <?php 
 include "../../../lib/config.php";
 include "../../../lib/koneksi.php";

 $nama=$_POST['namaIbu'];
 $suami=$_POST['namaSuami'];
 $tgl=$_POST['tglPendaftaran'];


 $username = $_POST['username'];
 $queryCekUsername = mysqli_query($koneksi, "SELECT username from tbl_ibubalita WHERE username = '$username'");


 $find = mysqli_num_rows($queryCekUsername);
 if ($find > 0) {
 	echo"<script> alert('Username Sudah Digunakan, Silahkan Gunakan Username yang Lain');window.location = '$admin_url'+'adminweb.php?modul=tambah_ibu';</script>";
 } else {
 	$querySimpan =mysqli_query($koneksi,"INSERT INTO tbl_ibubalita(username,namaIbu,namaSuami,tglPendaftaran)VALUES('$username','$nama','$suami','$tgl')");

 	if ($querySimpan) {
 		echo "<script> alert ('DATA IBU BERHASIL MASUK'); window.location='$admin_url'+'adminweb.php?modul=ibu';</script>";
 	} else { 
 		echo "<script> alert('Data ibu gagal dimasukkan'); window.location = '$admin_url'+'adminweb.php?modul=tambah_ibu';</script>";
 	}

 }
 ?>