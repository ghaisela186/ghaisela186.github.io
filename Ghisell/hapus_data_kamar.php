<?php
include 'koneksi.php';

$id= $_GET ['id'];
mysqli_query($koneksi, "delete from data_kamar where no_kamar='$id'");

header ("location: data_kamar.php");
?>