<?php

include_once("koneksi.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['submit'])){
    // ambil data dari formulir
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $nohp = $_POST['nohp'];
    $kelas = $_POST['kelas'];


    // buat query
//    $sql = "INSERT INTO pengajar (nama, alamat, nohp, kelas) VALUE ('$nama', '$alamat', '$nohp', '$kelas')";
    $result = mysqli_query($koneksi, "INSERT INTO pengajar (nama, alamat, nohp, kelas) VALUE ('$nama', '$alamat', '$nohp', '$kelas')");

  if($result){
    echo "Data berhasil disimpan!";
  } else {
    echo "Data gagal disimpan";
  }
?>
