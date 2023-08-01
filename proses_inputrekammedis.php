<?php
include 'koneksi.php';
$No_Transaksi = $_POST['no_transaksi'];
$Kode_Pasien = $_POST['kode_pasien'];
$Tgl_Berobat = $_POST['tgl']."-".$_POST['bln']."-".$_POST['thn'];
$Kode_Bidan = $_POST['kode_bidan'];
$Keluhan = $_POST['keluhan'];
$Biaya_Admin = $_POST['biaya_admin'];

mysqli_query($koneksi, "insert into t_tmedis values ('$No_Transaksi','$Kode_Pasien','$Tgl_Berobat',
'$Kode_Bidan','$Keluhan','$Biaya_Admin')");
header("location: listdatarekammedis.php");
