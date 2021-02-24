<?php
require 'functions.php';

//cek apakah tombol submit sudah di tekan atau belum
if (isset($_POST["submit"])) {


    //cek apakah data berhasil di tambahkan atau tidak
    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil ditambahkan');
                document.location.href = 'index.php';    
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal ditambahkan');
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
    <title>Tambah Data Produk</title>
</head>

<body>
    <h1>Tambah Data Produk</h1>

    <form action="" method="post">
        <li>
            <label for="nama_produk">Nama Produk :</label>
            <input type="text" name="nama_produk" id="nama_produk" required>
        </li>
        <li>
            <label for="keterangan">Keterangan :</label>
            <input type="text" name="keterangan" id="keterangan" required>
        </li>
        <li>
            <label for="harga">Harga :</label>
            <input type="text" name="harga" id="harga" required>
        </li>
        <li>
            <label for="jumlah">Jumlah :</label>
            <input type="text" name="jumlah" id="jumlah" required>
        </li>
        <li>
            <button type="submit" name="submit">Tambah Data</button>
        </li>





    </form>

</body>

</html>