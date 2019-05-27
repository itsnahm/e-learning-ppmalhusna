<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pengajar Baru | E-Learning PPM Al Husna</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>

    <header>

      <center>      <h3>Form Pengajar Baru</h3>    </center>
    </header>

<form action="proses-tambah-pengajar.php">

<div class="card">
  <div class="card-body">
    <form>
  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan nama lengkap pengajar">
  </div>
  <div class="form-group">
    <label for="nama">Alamat</label>
    <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan alamat lengkap">
  </div>
  <div class="form-group">
    <label for="nama">No HP</label>
    <input type="number" name="nohp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan nomor hp">
  </div>
  <div class="form-group">
    <label for="nama">Kelas ajar</label>
  </div>
  <select name="kelas" class="form-control">
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
  <button type="submit" action="proses-tambah-pengajar.php" class="btn btn-primary">Simpan data</button>
</form>
</div>
</div>
</form>








  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </body>
</html>
