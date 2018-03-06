<html>
<head>
  <title>CRUD dan Gambar Validasi</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
  <div class="container">
  <h1>Tambah Data Siswa</h1>
  <form method="post" action="proses_simpan.php" class="form-horizontal" enctype="multipart/form-data">
  <div class="form-group">
    <label class="control-label col-sm-2" for="nama">NIM</label>
    <div class="col-sm-10">
    <input type="text" name="nis">
  </div>
  </div>  
  <div class="form-group">
    <label class="control-label col-sm-2" for="nama">Nama</label>
    <div class="col-sm-10">
    <input type="text" name="nama">
  </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="nama">Jenis Kelamin</label>
    <div class="col-sm-10">
    <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
    <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
  </div>
  </div>  
  <div class="form-group">
    <label class="control-label col-sm-2" for="nama">Telepon</label>
    <div class="col-sm-10">
    <input type="text" name="telp">
  </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="nama">Alamat</label>
    <div class="col-sm-10">
    <textarea name="alamat"></textarea>
  </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="nama">Foto</label>
    <div class="col-sm-10">
    <input type="file" class='btn btn-default btn-sm' name="foto">
  </div>
  </div>
  <div class="col-sm-10">
  <input type="submit" class='btn btn-success btn-sm' value="Simpan">
  <a href="index.php"><input type="button" class='btn btn-warning btn-sm' value="Batal"></a>
</div>
  </form>
</body>
</html>