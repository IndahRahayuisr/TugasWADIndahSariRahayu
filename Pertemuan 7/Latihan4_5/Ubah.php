<?php
require 'Function.php';

//ambil data di url

$kodeboneka = $_GET["Kode"];

// query data boneka berdasarkan kode
$boneka = query("SELECT * FROM boneka WHERE Kode = '$kodeboneka'")[0];


// cek apakah tombol submit sudah ditekan atau belum

if(isset($_POST["submit"])){


    // cek apakah data berhasil di ubah atau tidak
    if (ubah($_POST) > 0){
        echo "
            <script>
            alert('data berhasil diubah!');
            document.location.href = 'Index.php'
            </script>
        ";
    } else{
        echo "
            <script>
            alert('data gagal diubah!');
            document.location.href = 'Index.php'
            </script>
        ";
    }

    
}

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ubah Data Boneka</title>
    </head>

    <body>
        <h1>Ubah Data Boneka</h1>

        <form action="" method="post">
            <ul>
                <li>
                    <label for="Nama">Nama Boneka</label>
                    <input type="text" name = "Nama" id="Nama" required value="<?= $boneka['Nama']?>">
                </li>
                <li>
                    <label for="Harga">Harga Boneka</label>
                    <input type="text" name = "Harga" id="Harga" required value="<?= $boneka['Harga']?>">
                </li>
                <li>
                    <label for="Basecolor">Basecolor Boneka</label>
                    <input type="text" name = "Basecolor" id="Basecolor" required value="<?= $boneka['Basecolor']?>">
                </li>
                <li>
                    <label for="Gambar">Gambar Boneka</label>
                    <input type="text" name = "Gambar" id="Gambar" required value="<?= $boneka['Gambar']?>">
                </li>
                <li>
                    <label for="Kode">Kode Boneka</label>
                    <input type="text" name = "Kode" id="Kode" value="<?= $boneka['Kode' ]?>">
                </li>
                <li>
                    <button type="submit" name="submit">Ubah Data</button>
                </li>
            </ul>

        </form>
        
    </body>
</html>