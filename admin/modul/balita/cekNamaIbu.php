<?php 
include "../../../lib/config.php";
include "../../../lib/koneksi.php";
$username =$_POST['namaIbu'];
$query= mysqli_query($koneksi,"SELECT * from tbl_ibubalita where username ='$username'");
while ($res = mysqli_fetch_array($query)) {

$output =  "<input type='text' hidden name='kodeIbu' value='".$res['kode_ibubalita']."'><span>".$res['namaIbu']."</span>";
 }
echo $output;
?>