<h3> Edit Data kamar </h3>

<?php
include 'koneksi.php';
$id= $_GET['id'];
$data = mysqli_query($koneksi,"select * from data_kamar WHERE no_kamar='$id'");
while($tampil= mysqli_fetch_array($data)){
?>
<form method="post" action="edit-aksi-data_kamar.php">
    <table>
       <tr>
          <td>no kamar</td>
          <td>
            <input type="number" name="nokam" value="<?php echo $tampil['no_kamar']; ?>">
          </td>
       </tr>
       <tr>
          <td>tipe</td>
          <td>
            <input type="text" name="tipe" value="<?php echo $tampil['tipe']; ?>">
          </td>
       </tr>
       <tr>
          <td>status ketersediaan</td>
          <td>
            <input type="text" name="status" value="<?php echo $tampil['status_ketersediaan']; ?>">
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