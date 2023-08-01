<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data Kode_Pasien yang di kirim dari url
$Kode_Bidan = $_GET['Kode_Bidan'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from t_bidan where Kode_Bidan='$Kode_Bidan'");
 
// mengalihkan halaman kembali ke index.php
header("location:listdatabidan.php");
 
?>