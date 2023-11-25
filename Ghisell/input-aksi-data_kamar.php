<?php
include 'koneksi.php';
$no_kamar= $_POST['nokam'];
$tipe = $_POST['tipe'];
$status_ketersediaan = $_POST['status'];

mysqli_query($koneksi, "insert into data_kamar values('$no_kamar', '$tipe','$status_ketersediaan')");
header("location:data_kamar.php");
?>