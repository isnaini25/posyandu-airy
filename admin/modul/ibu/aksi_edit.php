<?php 
 include "../../../lib/config.php";
 include "../../../lib/koneksi.php";

 $nama=$_POST['namaIbu'];
 $suami=$_POST['namaSuami'];
 $tgl=$_POST['tglPendaftaran'];
 $id=$_POST['kode_ibubalita'];


 
 	$queryUbah =mysqli_query($koneksi,"UPDATE tbl_ibubalita SET namaIbu='$nama', namaSuami='$suami', tglPendaftaran='$tgl'WHERE kode_ibubalita='$id'");

 	if ($queryUbah) {
 		echo "<script> alert ('DATA IBU BERHASIL di edit'); window.location='$admin_url'+'adminweb.php?modul=ibu';</script>";
 	} else { 
 		echo "<script> alert('Data ibu gagal di edit'); window.location = '$admin_url'+'adminweb.php?modul=edit_ibu';</script>";
 	}

 ?>