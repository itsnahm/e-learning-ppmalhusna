<?php
//koneksi database
include_once("koneksi.php");

// memberi variabel pada NIP dengan get
$id = $_GET['NIP'];

//Menghapus data yg dipilih
$result = mysqli_query($mysqli, "DELETE FROM pengajar WHERE NIP=$id");

//Mengarahkan pada halaman lain setelah dihapus
header("Location: halaman-pengajar.php?status=deleted");
?>