<?php 
include "koneksi.php";
?>
<title>Mengubah Data Negara</title>
<link rel="stylesheet" href="style.css">
<h1>Ubah Data Negara</h1>
<hr>

<?php 
$query = mysqli_query($koneksi, "SELECT * FROM tb_negara_20101105 WHERE kode_20101105='$_REQUEST[kode]' ");
while ($tampilkan = mysqli_fetch_array($query)) {
    ?>

    <form action="" method="POST">
        <table class="tambah">
            <tr>
                <td>Kode Negara</td>
                <td> : </td>
                <td>
                    <input type="text" name="kode" value="<?php echo $tampilkan['kode_20101105']; ?>" required readonly>
                </td>
            </tr>
            <tr>
                <td>Nama Negara</td>
                <td> : </td>
                <td>
                    <input type="text" name="nama" value="<?php echo $tampilkan['nama_20101105']; ?>" required>
                </td>
            </tr>
            <tr>
                <td>Ibukota Negara</td>
                <td> : </td>
                <td>
                    <input type="text" name="ibukota" value="<?php echo $tampilkan['ibukota_20101105']; ?>" required>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <button type="submit" name="tombolUbah">Ubah</button>
                </td>
            </tr>
        </table>
    </form>

    <?php 
}
?>

<?php
if (isset($_POST['tombolUbah'])) {
    $query = mysqli_query($koneksi, "UPDATE tb_negara_20101105 SET nama_20101105='$_POST[nama]', ibukota_20101105='$_POST[ibukota]' WHERE kode_20101105='$_POST[kode]' ");
    if($query) {
        echo "Data berhasil diubah!";
        header('location:index.php');
    } else {
        echo "Data gagal diubah!";
    }
}
?>