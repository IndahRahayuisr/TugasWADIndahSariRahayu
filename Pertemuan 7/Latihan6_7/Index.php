<?php
    // Koneksi ke database
    require 'Function.php';
    $boneka = query("SELECT * FROM boneka");

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Tugas WAD Pertemuan 7</title>
        <style>
        table, th, td {
             border: 3px solid black;
             border-collapse : collapse;
            }
        th,td{
            text-align: center
        }
        </style>
    </head>
<!-- Latihan 1 Buat tabel barang yang terkoneksi dengan database -->
    <body>
        <h1>Daftar Boneka</h1>

        <a href="Tambah.php">Tambah data boneka</a>
        <br><br>

        
        <table cellpadding = "15" cellspacing = "0">
            <tr>
                <th>Nama</th>
                <th>Harga</th>
                <th>Basecolor</th>
                <th>Gambar</th>
                <th>Kode</th>
                <th>Aksi</th>
            </tr>

            <?php $i= 1; ?>
            <?php foreach($boneka as $row) :?>

            <tr>
                <td><?= $row["Nama"]?></td>
                <td><?= $row["Harga"]?></td>
                <td><?= $row["Basecolor"]?></td>
                <td><img src="img/<?= $row["Gambar"]?>" alt="Bear" widht = "150" height = "150"></td>
                <td><?= $row["Kode"]?></td>
                <td>
                    <a href="">Ubah</a> |
                    <a href="Hapus.php?Kode=<?= $row["Kode"]?>">Hapus</a>
                </td>
            </tr>
            <?php $i++?>
            <?php endforeach?>

                </td>
            </tr>
        </table>

        
    </body>
</html>