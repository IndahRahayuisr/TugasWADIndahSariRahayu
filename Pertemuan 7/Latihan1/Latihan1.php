<?php
    // Koneksi ke database
    $conn = mysqli_connect("localhost","root","","toko_boneka");

    // ambil data dari tabel barang
    $result = mysqli_query($conn, "SELECT * FROM boneka");

    // if(!$result){
    //     echo mysqli_error($conn);
    // }

    // ambil data barang (fetch) dari object result
    // mysqli_fetch_row() // mengembalikan array numerik pake angka dimulai dar 0
    // mysqli_fetch_assoc() // mengembalikan array associative tinggal tulis nama kolomnya
    // mysqli_fetch_array() // mengambalikan keduanya
    // mysqli_fetch_object() // menggunakan objek

    // while( $brg = mysqli_fetch_assoc($result)){
    //     var_dump($brg);
    // }
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
        <table cellpadding = "10" cellspacing = "0">
            <tr>
                <th>Nama</th>
                <th>Harga</th>
                <th>Basecolor</th>
                <th>Gambar</th>
                <th>Kode</th>
                <th>Aksi</th>
            </tr>

            <?php $i = 1?>
            <?php while($row = mysqli_fetch_assoc($result)) :?>

            <tr>
                <td><?php echo $i; ?></td>
                <td><img src="img/<?= $row["gambar"]?>" alt="Bear" widht = "150" height = "150"></td>
                <td><?= $row["Nama"]?></td>
                <td><?= $row["Harga"]?></td>
                <td><?= $row["Basecolor"]?></td>
                <td><?= $row["Kode"]?></td>
                <td>
                    <a href="">Ubah</a> |
                    <a href="">Hapus</a>
                </td>
            </tr>
            <?php $i++?> 
            <?php endwhile?>
                </td>
            </tr>
        </table>
    </body>
</html>