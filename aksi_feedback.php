<?php 

include "lib/koneksi.php";
$pengirim= $_POST['pengirim'];
$pesan =  $_POST['pesan'];




	$feedback = mysqli_query($koneksi, "INSERT INTO tbl_feedback (pengirim,pesan) VALUES ('$pengirim', '$pesan')");

if ($feedback) {
	echo "<script> alert('Terimakasih telah mengirimkan feedback kepada kami'); window.location = 'kontak.php';</script>";
}


?>
