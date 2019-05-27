<?php
//membuat variabel utk server, username, password dan database;
$host = "localhost";
$username = "root";
$password = "";
$database = "ppmalhusna";

//membuat koneksi dengan database
$koneksi = mysqli_connect($host, $username, $password, $database);

//mengecek koneksi
if (!$koneksi) {
  die("Koneksi gagal : " . mysqli_connect_error());
} else {
  echo "Berhasil terkoneksi dengan database ppmalhusna";
}

mysqli_close($koneksi);


 ?>
