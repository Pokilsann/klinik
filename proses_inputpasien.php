<?php
include 'koneksi.php';
$Kode_Pasien = $_POST['kode_pasien'];
$Nama_Pasien = $_POST['nama_pasien'];
$Tanggal_Lahir = $_POST['tanggal_lahir'];
$Tempat_Lahir = $_POST['tempat_lahir'];
$Jenis_Kelamin = $_POST['jenis_kelamin'];
$Alamat = $_POST['alamat'];
$Telepon = $_POST['telepon'];
$Email = $_POST['email'];

mysqli_query($koneksi, "insert into t_pasien values ('$Kode_Pasien','$Nama_Pasien'
,'$Tanggal_Lahir','$Tempat_Lahir','$Jenis_Kelamin','$Alamat','$Telepon','$Email')");
header("location: listdatapasien.php");
