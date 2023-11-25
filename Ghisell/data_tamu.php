<html>
Table Data Tamu
<table border= "1">
<tr>
    <td> id_tamu</td>
    <td>nama_tamu</td>
    <td>alamat</td>
    <td>kontak</td>
    <td> aksi </td>
</tr>

<?php
include "koneksi.php";
$data=mysqli_query($koneksi, "select * from data_tamu");
while($tampil=mysqli_fetch_array($data)){
    ?>
        <tr>
            <td><?php echo $tampil['id_tamu'] ?></td>
            <td><?php echo $tampil['nama_tamu'] ?></td>
            <td><?php echo $tampil['alamat'] ?></td>
            <td><?php echo $tampil['kontak'] ?></td>
            <td><a href="hapus_data_tamu.php?id=<?php echo $tampil['id_tamu']; ?>">Hapus</a>
              <a href="edit_data_tamu.php?id=<?php echo $tampil ['id_tamu']; ?>">Edit</a>
        </td>
        </tr>
<?php
}
?>
</table>
<a href="input-data_tamu.php"> Tambahkan Data Baru</a>
</html>