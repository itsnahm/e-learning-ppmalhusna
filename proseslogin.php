<?php

include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($koneksi, "SELECT * FROM admin where username='$username' and password = '$password'")
$row = mysqli_fetch_array($login);

if ($row['username'] == $username AND $row['password'] == $password) {
session_start();
$_SESSION['username'] = $row['username'];
$_SESSION['password'] = $row['password'];
header('location:home.php');
} else {
  echo "Login gagal!<br>";
  echo "<a href="form_admin.php">Login kembali</a>";
}

 ?>
