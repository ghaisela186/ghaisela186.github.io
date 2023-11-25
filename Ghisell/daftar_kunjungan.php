<html>
Table Daftar Kunjungan
<table border= "1">
<tr>
    <td>id_transaksi</td>
    <td> id_tamu</td>
    <td>id_pegawai</td>
    <td>no_kamar</td>
    <td>tagihan_tamu</td>
    <td> aksi </td>
</tr>

<?php
include "koneksi.php";
$data=mysqli_query($koneksi, "select * from daftar_kunjungan");
while($tampil=mysqli_fetch_array($data)){
    ?>
        <tr>
            <td><?php echo $tampil['id_transaksi'] ?></td>
            <td><?php echo $tampil['id_tamu'] ?></td>
            <td><?php echo $tampil['id_pegawai'] ?></td>
            <td><?php echo $tampil['no_kamar'] ?></td>
            <td><?php echo $tampil['tagihan_tamu'] ?></td>
            <td><a href="hapus_daftar_kunjungan.php?id=<?php echo $tampil['id_transaksi']; ?>">Hapus</a>
              <a href="edit_daftar_kunjungan.php?id=<?php echo $tampil ['id_transaksi']; ?>">Edit</a>
        </td>
        </tr>
<?php
}
?>
</table>
<a href="input-daftar_kunjungan.php"> Tambahkan Data Baru</a>
</html>