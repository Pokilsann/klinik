<?php
include 'koneksi.php';
$Kode_Bidan = $_POST['kode_bidan'];
$Nama_Bidan = $_POST['nama_bidan'];
$Kode_Poli = $_POST['kode_poli'];

mysqli_query($koneksi, "insert into t_bidan values ('$Kode_Bidan','$Nama_Bidan','$Kode_Poli')");
header("location: listdatabidan.php");
