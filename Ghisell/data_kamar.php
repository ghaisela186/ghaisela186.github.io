<html>
Table Data Kamar
<table border= "1">
<tr>
    <td> no_kamar</td>
    <td>tipe</td>
    <td>status_keterediaan</td>
    <td> aksi </td>
</tr>

<?php
include "koneksi.php";
$data=mysqli_query($koneksi, "select * from data_kamar");
while($tampil=mysqli_fetch_array($data)){
    ?>
        <tr>
            <td><?php echo $tampil['no_kamar'] ?></td>
            <td><?php echo $tampil['tipe'] ?></td>
            <td><?php echo $tampil['status_ketersediaan'] ?></td>
            <td><a href="hapus_data_kamar.php?id=<?php echo $tampil['no_kamar']; ?>">Hapus</a>
              <a href="edit_data_kamar.php?id=<?php echo $tampil ['no_kamar']; ?>">Edit</a>
        </td>
        </tr>
<?php
}
?>
</table>
<a href="input-data_kamar.php"> Tambahkan Data Baru</a>
</html>