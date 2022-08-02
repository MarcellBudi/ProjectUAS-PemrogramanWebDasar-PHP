<?php 
include "koneksi.php";
?>
<title>Menambahkan Data Negara</title>
<link rel="stylesheet" href="style.css">
<h1>Tambah Data Negara</h1>
<hr>
<form action="" method="POST">
    <table class="tambah">
        <tr>
            <td>Kode Negara</td>
            <td> : </td>
            <td>
                <input type="text" name="kode" required>
            </td>
        </tr>
        <tr>
            <td>Nama Negara</td>
            <td> : </td>
            <td>
                <input type="text" name="nama" required>
            </td>
        </tr>
        <tr>
            <td>Ibukota Negara</td>
            <td> : </td>
            <td>
                <input type="text" name="ibukota" required>
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>
                <button type="submit" name="tombolSimpan">Simpan</button>
            </td>
        </tr>
    </table>
</form>
<?php 
if (isset($_POST['tombolSimpan'])) {
    $query = mysqli_query($koneksi, "INSERT INTO tb_negara_20101105 (kode_20101105, nama_20101105, ibukota_20101105) VALUES ('$_POST[kode]', '$_POST[nama]', '$_POST[ibukota]') ");
    if($query) {
        echo "Data berhasil ditambahkan!";
        header('location:index.php');
    } else {
        echo "Data gagal ditambahkan!";
    }
}
?>
