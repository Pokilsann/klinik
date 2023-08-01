<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data Kode_Pasien yang di kirim dari url
$No_Transaksi = $_GET['No_Transaksi'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from t_tmedis where No_Transaksi='$No_Transaksi'");
 
// mengalihkan halaman kembali ke index.php
header("location:listdatarekammedis.php");
 
?>