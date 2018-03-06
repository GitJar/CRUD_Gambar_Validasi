<html>
<head>
  <title>CRUD dan Gambar Validasi</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
  <h1>Data Siswa</h1>
  <a href="form_simpan.php" class="btn btn-success btn-sm">Tambah Data</a><br><br>
  <div class="table-responsive">
  <table class="table table-bordered table-striped">
    <thead>
  <tr>
    <th>Foto</th>
    <th>NIM</th>
    <th>Nama</th>
    <th>Jenis Kelamin</th>
    <th>Telepon</th>
    <th>Alamat</th>
  </tr>
</thead>
<tbody>
  <?php
  // Load file koneksi.php
  include "koneksi.php";
  
  $query = "SELECT * FROM siswa"; // Query untuk menampilkan semua data siswa
  $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
  
  while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
    echo "<tr>";
    echo "<td><img src='upload/".$data['foto']."' width='100' height='100'></td>";
    echo "<td>".$data['nim']."</td>";
    echo "<td>".$data['nama']."</td>";
    echo "<td>".$data['jenis_kelamin']."</td>";
    echo "<td>".$data['telp']."</td>";
    echo "<td>".$data['alamat']."</td>";
    echo "</tr>";
  }
  ?>
</tbody>
  </table>
</div>
</body>
</htm