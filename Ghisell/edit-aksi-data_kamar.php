<?php 
    include 'koneksi.php';

    $no_kamar =$_POST['nokam'];
    $tipe =$_POST['tipe'];
    $status_ketersediaan =$_POST['status'];

    mysqli_query($koneksi, "update data_kamar set no_kamar='$no_kamar', tipe='$tipe' , status_ketersediaan='$status_ketersediaan' where no_kamar='$no_kamar'");

    header('location:data_kamar.php');
?>