<?php
require 'functions.php';

$produk = query("SELECT * FROM produk");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info Produk</title>
</head>

<body>
    <h1>Info Produk Arkademian</h1>

    <a href="tambah.php">tambah data</a>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Keterangan</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>aksi</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($produk as $row) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $row['nama_produk'] ?></td>
                <td><?= $row['keterangan'] ?></td>
                <td><?= $row['harga'] ?></td>
                <td><?= $row['jumlah'] ?></td>
                <td>
                    <a href="ubah.php?id=<?= $row["id"] ?>">ubah</a> |
                    <a href="hapus.php?id=<?= $row["id"] ?>" onclick="return confirm('anda akan menghapus?');">hapus</a>
                </td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>

</body>

</html>