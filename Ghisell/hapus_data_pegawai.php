<?php
include 'koneksi.php';

$id= $_GET ['id'];
mysqli_query($koneksi, "delete from data_pegawai where id_pegawai='$id'");

header ("location: data_pegawai.php");
?>