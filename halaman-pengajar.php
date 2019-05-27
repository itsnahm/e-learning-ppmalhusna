<?php
include_once("koneksi.php");
$tabel = "SELECT * FROM pengajar ORDER by NIP desc";
$result = mysqli_query($koneksi, $tabel);

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Daftar Pengajar | E-Learning PPM Al Husna</title>
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
           <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

   </head>
   <body>

  <center>
        <h3>Daftar Pengajar PPM Al Husna</h3>
</center>


<a class="btn btn-primary" data-toggle="collapse" href="tambah-pengajar.php" role="button" aria-expanded="false" aria-controls="collapseExample">
  Tambah pengajar baru
</a>

    <br>
<center>
  <div class="card">
    <div class="card-body">
  <div class="table-responsive-xl">
    <table class="table table-bordered">

        <tr>

            <th>NIP</th>
            <th>Nama Lengkap</th>
            <th>Alamat</th>
            <th>No HP</th>
            <th>Kelas</th>
            <th>Tindakan</th>
        </tr>



        <?php

        while($pengajar = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>".$pengajar['NIP']."</td>";
            echo "<td>".$pengajar['nama']."</td>";
            echo "<td>".$pengajar['alamat']."</td>";
            echo "<td>".$pengajar['nohp']."</td>";
            echo "<td>".$pengajar['kelas']."</td>";

            echo "<td>";
            echo "<a href='edit-pengajar.php?id=".$pengajar['NIP']."'>Ubah</a> | ";
            echo "<a href='hapus-pengajar.php?id=".$pengajar['NIP']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>


    </table>
  </div>
</div>
</div>
</center>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

   </body>
 </html>
