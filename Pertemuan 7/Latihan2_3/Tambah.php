<?php
require 'function.php';


// cek apakah tombol submit sudah ditekan atau belum

if(isset($_POST["submit"])){


    // cek apakah data berhasil di tambahkan atau tidak
    if (tambah($_POST) > 0){
        echo "
            <script>
            alert('data yang dimasukkan berhasil ditambahkan!');
            document.location.href = 'Index.php'
            </script>
        ";
    } else{
        echo "
            <script>
            alert('data yang dimasukkan gagal ditambahkan!');
            document.location.href = 'Index.php'
            </script>
        ";
    }

    
}

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Tambah boneka</title>
    </head>

    <body>
        <h1>Tambah Boneka</h1>

        <form action="" method="post">
            <ul>
                <li>
                    <label for="namaboneka">Nama Boneka</label>
                    <input type="text" name = "namaboneka" id="namaboneka" required>
                </li>
                <li>
                    <label for="hargaboneka">Harga Boneka</label>
                    <input type="text" name = "hargaboneka" id="hargaboneka" required>
                </li>
                <li>
                    <label for="basecolorboneka">Basecolor Boneka</label>
                    <input type="text" name = "basecolorboneka" id="basecolorboneka" required>
                </li>
                <li>
                    <label for="gambarboneka">Gambar Boneka</label>
                    <input type="text" name = "gambarboneka" id="gambarboneka" required>
                </li>
                <li>
                    <label for="kodeboneka">Kode Boneka</label>
                    <input type="text" name = "kodeboneka" id="kodeboneka">
                </li>
                <li>
                    <button type="submit" name="submit">Tambah Data</button>
                </li>
            </ul>

        </form>
        
    </body>
</html>