<?php
include 'koneksi.php';
$id_transaksi= $_POST['idtran'];
$id_tamu = $_POST['idtam'];
$id_pegawai = $_POST['idpeg'];
$no_kamar = $_POST['nokam'];
$tagihan_tamu = $_POST['tagtam'];

mysqli_query($koneksi, "insert into daftar_kunjungan values('$id_transaksi', '$id_tamu','$id_pegawai', '$no_kamar', '$tagihan_tamu')");
header("location:daftar_kunjungan.php");
?>