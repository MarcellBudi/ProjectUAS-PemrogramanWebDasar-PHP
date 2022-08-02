<?php 
include "koneksi.php";
?>
<title>Menghapus Data Negara</title>
<link rel="stylesheet" href="style.css">
<h1>Hapus Data Negara</h1>
<hr>
<div class="container">
<h3>Apakah yakin menghapus data ini?</h3>
<form class="pilihan" action="" method="POST">
    <button type="submit" name="tombolHapus">Oke</button>
    <button type="submit" name="tombolBatal">Batal</button>
</form>
</div>
<?php 
if (isset($_POST['tombolBatal'])) {
    header('location:index.php');
}
if (isset($_POST['tombolHapus'])) {
    $query = mysqli_query($koneksi, "DELETE FROM tb_negara_20101105 WHERE kode_20101105='$_REQUEST[kode]' ");
    if ($query) {
        echo "Data berhasil dihapus!";
        header('location:index.php');
    } else { 
        echo "Data gagal dihapus!";
    }
} 
?>