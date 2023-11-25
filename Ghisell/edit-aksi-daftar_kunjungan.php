<?php 
    include 'koneksi.php';

    $id_transaksi =$_POST['idtran'];
    $id_tamu =$_POST['idtam'];
    $id_pegawai =$_POST['idpeg'];
    $no_kamar =$_POST['nokam'];
    $tagihan_tamu =$_POST['tagtam'];

    mysqli_query($koneksi, "update daftar_kunjungan set id_transaksi='$id_transaksi', id_tamu='$id_tamu' , id_pegawai='$id_pegawai', no_kamar='$no_kamar', tagihan_tamu='$tagihan_tamu' where id_transaksi='$id_transaksi'");

    header('location:daftar_kunjungan.php');
?>