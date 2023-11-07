<?php

$conn = mysqli_connect("localhost","root","","toko_boneka");

function query($query){
    global $conn;

    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
  }

function tambah($data){
      global $conn;

      $kodeboneka = htmlspecialchars($data["kodeboneka"]);
      $namaboneka = htmlspecialchars($data["namaboneka"]);
      $hargaboneka = htmlspecialchars($data["hargaboneka"]);
      $basecolorboneka = htmlspecialchars($data["basecolorboneka"]);
      $gambarboneka = htmlspecialchars($data["gambarboneka"]);

          //query insert data
    $query = "INSERT INTO boneka
    VALUES
    ('$kodeboneka','$namaboneka','$hargaboneka','$basecolorboneka','$gambarboneka')
    ";
     mysqli_query($conn, $query);

     return mysqli_affected_rows($conn);
}

function hapus($kode_barang){
  global $conn;
  mysqli_query($conn, "DELETE FROM boneka WHERE Kode = '$kodeboneka'");

  return mysqli_affected_rows($conn);
}


function ubah($data){
  global $conn;
  $namaboneka = htmlspecialchars($data["namaboneka"]);
  $hargaboneka = htmlspecialchars($data["hargaboneka"]);
  $basecolorboneka = htmlspecialchars($data["basecolorboneka"]);
  $gambarboneka = htmlspecialchars($data["gambarboneka"]);
  $kodeboneka = htmlspecialchars($data["kodeboneka"]);

      //query insert data
        $query = "UPDATE boneka SET 
                    namaboneka = '$namaboneka',
                    hargaboneka = '$hargaboneka',
                    basecolorboneka = $basecolorboneka,
                    gambarboneka = $gambarboneka,
                    kodeboneka = '$kodeboneka'

                  WHERE Kode = '$kodeboneka'
                    ";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
}
?>