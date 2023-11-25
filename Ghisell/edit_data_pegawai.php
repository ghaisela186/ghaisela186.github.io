<h3> Edit Data Pegawai </h3>

<?php
include 'koneksi.php';
$id= $_GET['id'];
$data = mysqli_query($koneksi,"select * from data_pegawai WHERE id_pegawai='$id'");
while($tampil= mysqli_fetch_array($data)){
?>
<form method="post" action="edit-aksi-data_pegawai.php">
    <table>
       <tr>
          <td>id pegawai</td>
          <td>
            <input type="number" name="idpeg" value="<?php echo $tampil['id_pegawai']; ?>">
          </td>
       </tr>
       <tr>
          <td>nama</td>
          <td>
            <input type="text" name="nama" value="<?php echo $tampil['nama']; ?>">
          </td>
       </tr>
       <tr>
          <td>jadwal shift</td>
          <td>
            <input type="text" name="jdwl" value="<?php echo $tampil['jadwal_shift']; ?>">
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