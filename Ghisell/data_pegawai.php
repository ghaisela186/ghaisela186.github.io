<html>
Table Pegawai
<table border= "1">
<tr>
    <td> id_pegawai</td>
    <td>nama_pegawai</td>
    <td>jadwal_shift</td>
    <td>aksi</td>
</tr>

<?php
include "koneksi.php";
$data=mysqli_query($koneksi, "select * from data_pegawai");
while($tampil=mysqli_fetch_array($data)){
    ?>
        <tr>
            <td><?php echo $tampil['id_pegawai'] ?></td>
            <td><?php echo $tampil['nama'] ?></td>
            <td><?php echo $tampil['jadwal_shift'] ?></td>
            <td>
            <a href="hapus_data_pegawai.php?id=<?php echo $tampil['id_pegawai']; ?>">Hapus</a>
              <a href="edit_data_pegawai.php?id=<?php echo $tampil ['id_pegawai']; ?>">Edit</a>
            </td>
        </tr>
<?php
}
?>
</table>
<a href="input-data_pegawai.php"> Tambahkan Data Baru</a>
</html>