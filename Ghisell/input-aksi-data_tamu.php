<?php
include 'koneksi.php';
$id_tamu= $_POST['idtam'];
$nama_tamu = $_POST['nama'];
$alamat = $_POST['alamat'];
$kontak = $_POST['kotak'];

mysqli_query($koneksi, "insert into data_tamu values('$id_tamu', '$nama_tamu','$alamat', '$kontak')");
header("location:data_tamu.php");
?>