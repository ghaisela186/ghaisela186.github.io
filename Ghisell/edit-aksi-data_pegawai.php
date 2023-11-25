<?php 
    include 'koneksi.php';

    $id_pegawai =$_POST['idpeg'];
    $nama =$_POST['nama'];
    $jadwal_shift =$_POST['jdwl'];

    mysqli_query($koneksi, "update data_pegawai set id_pegawai='$id_pegawai', nama='$nama' , jadwal_shift='$jadwal_shift' where id_pegawai='$id_pegawai'");

    header('location:data_pegawai.php');
?>