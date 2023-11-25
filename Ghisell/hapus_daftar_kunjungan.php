<?php
include 'koneksi.php';

$id= $_GET ['id'];
mysqli_query($koneksi, "delete from daftar_kunjungan where id_transaksi='$id'");

header ("location: daftar_kunjungan.php");
?>