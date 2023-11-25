<?php 
    include 'koneksi.php';

    $id_tamu =$_POST['idtam'];
    $nama_tamu =$_POST['nama'];
    $alamat =$_POST['alamat'];
    $kontak =$_POST['kontak'];

    mysqli_query($koneksi, "update data_tamu set id_tamu='$id_tamu', nama_tamu='$nama_tamu' , alamat='$alamat', kontak='$kontak' where id_tamu='$id_tamu'");

    header('location:data_tamu.php');
?>