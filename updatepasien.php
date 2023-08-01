<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$Kode_Pasien = $_POST['Kode_Pasien'];
$Nama_Pasien = $_POST['Nama_Pasien'];
$Tanggal_Lahir = $_POST['Tanggal_Lahir'];
$Tempat_Lahir = $_POST['Tempat_Lahir'];
$Jenis_Kelamin = $_POST['Jenis_Kelamin'];
$Alamat = $_POST['Alamat'];
$Telepon = $_POST['Telepon'];
$Email = $_POST['Email'];
// update data ke database
mysqli_query($koneksi,"update t_pasien set Kode_Pasien='$Kode_Pasien', Nama_Pasien='$Nama_Pasien', 
Tanggal_Lahir='$Tanggal_Lahir', Tempat_Lahir='$Tempat_Lahir', Jenis_Kelamin='$Jenis_Kelamin', Alamat='$Alamat' 
, Telepon='$Telepon', Email='$Email' where Kode_Pasien='$Kode_Pasien'");
 
// mengalihkan halaman kembali ke listdatapasien.php
header("location:listdatapasien.php");
 
?>