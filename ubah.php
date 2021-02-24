<?php
require 'functions.php';

//ambil data di URL
$id = $_GET["id"];
//query data produk berdasarkan id
$prd = query("SELECT * FROM produk WHERE id =$id")[0];

//cek apakah tombol submit sudah di tekan atau belum
if (isset($_POST["submit"])) {


    //cek apakah data berhasil di ubah atau tidak
    if (ubah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil diubah');
                document.location.href = 'index.php';    
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal diubah');
                document.location.href = 'index.php';    
            </script>
        ";
    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ubah data produk</title>
</head>

<body>
    <h1>Ubah Data Produk</h1>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $prd["id"]; ?>">
        <li>
            <label for="nama_produk">Nama Produk :</label>
            <input type="text" name="nama_produk" id="nama_produk" required value="<?= $prd["nama_produk"]; ?>">
        </li>
        <li>
            <label for="keterangan">Keterangan :</label>
            <input type="text" name="keterangan" id="keterangan" required value="<?= $prd["keterangan"]; ?>">
        </li>
        <li>
            <label for="harga">Harga :</label>
            <input type="text" name="harga" id="harga" required value="<?= $prd["harga"]; ?>">
        </li>
        <li>
            <label for="jumlah">Jumlah :</label>
            <input type="text" name="jumlah" id="jumlah" required value="<?= $prd["jumlah"]; ?>">
        </li>
        <li>
            <button type="submit" name="submit">ubah data</button>
        </li>

    </form>

</body>

</html>