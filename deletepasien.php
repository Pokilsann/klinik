<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data Kode_Pasien yang di kirim dari url
$Kode_Pasien = $_GET['Kode_Pasien'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from t_pasien where Kode_Pasien='$Kode_Pasien'");
 
// mengalihkan halaman kembali ke index.php
header("location:listdatapasien.php");
 
?>