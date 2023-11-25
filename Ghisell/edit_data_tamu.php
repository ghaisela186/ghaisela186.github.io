<h3> Edit Data Tamu </h3>

<?php
include 'koneksi.php';
$id= $_GET['id'];
$data = mysqli_query($koneksi,"select * from data_tamu WHERE id_tamu='$id'");
while($tampil= mysqli_fetch_array($data)){
?>
<form method="post" action="edit-aksi-data_tamu.php">
    <table>
       <tr>
          <td>id tamu</td>
          <td>
            <input type="number" name="idtam" value="<?php echo $tampil['id_tamu']; ?>">
          </td>
       </tr>
       <tr>
          <td>nama_tamu</td>
          <td>
            <input type="text" name="nama" value="<?php echo $tampil['nama_tamu']; ?>">
          </td>
       </tr>
       <tr>
          <td>alamat</td>
          <td>
            <input type="text" name="alamat" value="<?php echo $tampil['alamat']; ?>">
          </td>
       </tr>
       <tr>
          <td>kontak</td>
          <td>
            <input type="text" name="kontak" value="<?php echo $tampil['kontak']; ?>">
          </td>
       </tr>
       <tr>
        <td>
            <input type="submit" value="SIMPAN">
        </td>
       </tr>
    </table>
</form>

<?php
}
?>