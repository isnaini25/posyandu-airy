<?php 	
$tanggal1 = new DateTime("2020-10-03");
$tanggal2 = new DateTime();
 
$perbedaan = $tanggal2->diff($tanggal1)->format("%a");


$week = (int) $perbedaan / 7 ; 
// echo (int)$week; 
$fix = $perbedaan - (7 * (int) $week) ;
echo (int) $week . " minggu " . $fix . " hari";

 ?>