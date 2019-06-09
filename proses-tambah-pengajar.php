<?php
// include database connection file
include_once("koneksi.php");

// Check If form submitted, insert form data into users table.
if(isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $nohp = $_POST['nohp'];
    $kelas = $_POST['kelas'];

    // Insert user data into table
    $result = mysqli_query($mysqli, "INSERT INTO pengajar(nama,alamat,nohp,kelas) VALUES('$nama','$alamat','$nohp','$kelas')");

    if ($result) {
    echo "User added successfully. <a href='halaman-pengajar.php'>Lihat halaman pengajar</a>";
} else {
  echo "Gagal!";
}
?>