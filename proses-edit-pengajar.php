<?php
// include database connection file
include_once("koneksi.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{
    $id = $_POST['NIP'];

    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $nohp=$_POST['nohp'];
    $kelas=$_POST['kelas'];

    // update user data
    $result = mysqli_query($mysqli, "UPDATE kelas SET nama='$nama', alamat='$alamat', nohp='$nohp', kelas='$kelas' WHERE NIP=$id");

    // Redirect to homepage to display updated user in list
    header("Location: halaman-pengajar.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
$tabel = "SELECT * FROM pengajar WHERE NIP=$id";
$koneksi = mysqli_connect($host, $username, $password, $database);
$result = mysqli_query($koneksi, $tabel);

while($pengajar = mysqli_fetch_array($result))
{
    $nama = $pengajar['nama'];
    $alamat = $pengajar['alamat'];
    $nohp = $pengajar['nohp'];
    $pengajar = $pengajar['kelas'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pengajar Baru | E-Learning PPM Al Husna</title>
    <style>
      .box{

        max-width: 600px;
        height: auto;
        align-items: center;
        margin-right: auto;
        margin-left: auto;
      }
    </style>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>

    <header>

      <center>      <h3>Edit Data Pengajar </h3>    </center>
    </header>
<div class="box">
<form action="proses-tambah-pengajar.php">

<div class="card">
  <div class="card-body">
    <form>
  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value=<?php echo $nama;?> required autofocus>
  </div>
  <div class="form-group">
    <label for="nama">Alamat</label>
    <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value=<?php echo $alamat;?> required autofocus>
  </div>
  <div class="form-group">
    <label for="nama">No HP</label>
    <input type="number" name="nohp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value=<?php echo $nohp;?> required autofocus>
  </div>
  <div class="form-group">
    <label for="nama">Kelas ajar</label>
    <select class="form-control" id="sel1" name="kelas" value=<?php echo $kelas;?> required>

    <option value="1">Pra Ula</option>
    <option value="2">Ula 1</option>
    <option value="3">Ula 2</option>
    <option value="4">Ula 3</option>
    <option value="5">Wusho 1</option>
    <option value="6">Wusho 2</option>
    <option value="7">Ulya</option>
    <option value="8">Askim</option>
    <option value="9">Kitab</option>
  </select>
    </div>
  <button type="submit" action="proses-tambah-pengajar.php" class="btn btn-primary">Simpan data</button>
  <button type="reset" action="proses-tambah-pengajar.php" class="btn btn-primary">Reset</button>
</form>
</div>
</div>
</form>
</div>








  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </body>
</html>
