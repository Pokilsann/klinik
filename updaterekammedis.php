<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$No_Transaksi = $_POST['No_Transaksi'];
$Kode_Pasien = $_POST['Kode_Pasien'];
$Tgl_Berobat = $_POST['Tgl_Berobat'];
$Kode_Bidan = $_POST['Kode_Bidan'];
$Keluhan = $_POST['Keluhan'];
$Biaya_Admin = $_POST['Biaya_Admin'];
// update data ke database
mysqli_query($koneksi,"update t_tmedis set No_Transaksi='$No_Transaksi', Kode_Pasien='$Kode_Pasien', 
Tgl_Berobat='$Tgl_Berobat',Kode_Bidan='$Kode_Bidan',Keluhan='$Keluhan',Biaya_Admin='$Biaya_Admin'
where No_Transaksi='$No_Transaksi'");
// mengalihkan halaman kembali ke listdatarekammedis.php
header("location:listdatarekammedis.php");
 
?>