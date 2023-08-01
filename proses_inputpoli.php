<?php
include 'koneksi.php';
$Kode_Poli = $_POST['kode_poli'];
$Nama_Poli = $_POST['nama_poli'];

mysqli_query($koneksi, "insert into t_poli values ('$Kode_Poli','$Nama_Poli')");
header("location: index.php");
