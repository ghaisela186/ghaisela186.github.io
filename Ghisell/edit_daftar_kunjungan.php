<h3> Edit Dftar  </h3>

<?php
include 'koneksi.php';
$id= $_GET['id'];
$data = mysqli_query($koneksi,"select * from daftar_kunjungan where id_transaksi='$id'");
while($tampil= mysqli_fetch_array($data)){
?>
<form method="post" action="edit-aksi-daftar_kunjungan.php">
    <table>
       <tr>
          <td>Id transaksi</td>
          <td>
            <input type="number" name="idtran" value="<?php echo $tampil['id_transaksi']; ?>">
          </td>
       </tr>
       <tr>
          <td>id tamu</td>
          <td>
            <input type="number" name="idtam" value="<?php echo $tampil['id_tamu']; ?>">
          </td>
       </tr>
       <tr>
          <td>id pegawai</td>
          <td>
            <input type="number" name="idpeg" value="<?php echo $tampil['id_pegawai']; ?>">
          </td>
       </tr>
       <tr>
          <td>no kamar</td>
          <td>
            <input type="number" name="nokam" value="<?php echo $tampil['no_kamar']; ?>">
          </td>
       </tr>
       <tr>
          <td>tagihan tamu</td>
          <td>
            <input type="number" name="tagtam" value="<?php echo $tampil['tagihan_tamu']; ?>">
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