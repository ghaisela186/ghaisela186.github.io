<?php
include 'koneksi.php';
$id_pegawai = $_POST['idpeg'];
$nama = $_POST['nama'];
$jadwal_shift = $_POST['jdwl'];

mysqli_query($koneksi, "insert into data_pegawai values('$id_pegawai', '$nama','$jadwal_shift')");
header("location:data_pegawai.php");
?>