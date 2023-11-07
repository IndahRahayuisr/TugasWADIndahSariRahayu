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
?>