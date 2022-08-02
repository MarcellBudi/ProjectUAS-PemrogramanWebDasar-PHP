<?php 
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <title>Data Ibukota Negara</title>
</head>
<body>
    <h1>DATA IBUKOTA NEGARA</h1><hr>
    <div class="container">
    <a class="tambah" href='tambah.php'>Tambah Data</a> <br> <br>
    
    <form action="" method="POST">
        <input type="text" name="cari" placeholder="Cari Nama Negara & Ibukota Negara">
        <button type="submit" name="tombolCari">Cari</button>
    </form> <br>

    <table class="pisah" border="1">
        <tr>
            <th>Kode Negara</th>
            <th>Nama Negara</th>
            <th>Ibukota Negara</th>
            <th colspan="2"> Pilihan </th>
        </tr>

        <?php
        if (isset($_POST['tombolCari'])) {
            $query = mysqli_query($koneksi, "SELECT * FROM tb_negara_20101105 WHERE nama_20101105 LIKE '%$_POST[cari]%' OR ibukota_20101105 LIKE '%$_POST[cari]%' ");
        } else {
            $query = mysqli_query($koneksi, "SELECT * FROM tb_negara_20101105");
        }
       
        while ($tampilkan = mysqli_fetch_array($query)) {
            echo "<tr>";
                echo "<td> $tampilkan[kode_20101105] </td>";
                echo "<td> $tampilkan[nama_20101105] </td> ";
                echo "<td> $tampilkan[ibukota_20101105] </td> ";
                echo "<td  class='aksi'> <a href='ubah.php?kode=$tampilkan[kode_20101105]'>Ubah</a> </td>";
                echo "<td class='aksi'> <a href='hapus.php?kode=$tampilkan[kode_20101105]'>Hapus</a> </td>";
            echo "</tr>";
        }
        ?>
    </table>
    </div>
</body>
</html> 

