<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$Kode_Bidan = $_POST['Kode_Bidan'];
$Nama_Bidan = $_POST['Nama_Bidan'];
$Kode_Poli = $_POST['Kode_Poli'];

// update data ke database
mysqli_query($koneksi,"update t_bidan set Kode_Bidan='$Kode_Bidan', Nama_Bidan='$Nama_Bidan', 
Kode_Poli='$Kode_Poli' where Kode_Bidan='$Kode_Bidan'");


// mengalihkan halaman kembali ke listdatapasien.php
header("location:listdatabidan.php");
 
?>