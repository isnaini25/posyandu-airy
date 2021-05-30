<?php 
$server = "sql6.freemysqlhosting.net";
$username = "sql6415883";
$password = "wusrN8nblr";
$database = "sql6415883";

// $server = "localhost";
// $username = "root";
// $password = "";
// $database = "posyandu";
$koneksi = mysqli_connect($server, $username, $password, $database);

if(mysqli_connect_errno()){
	echo "Failde to connect to MySQL : ". mysqli_connect_error();
	exit();
}	

 ?>