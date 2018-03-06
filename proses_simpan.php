<?php
error_reporting(0);
// Load file koneksi.php
include "koneksi.php";
include "fungsi_validasi_gambar.php";
// Ambil Data yang Dikirim dari Form
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];
$foto = $_FILES['foto']['name'];
$tipe_file   = $_FILES['foto']['type'];
$tmp = $_FILES['foto']['tmp_name'];

$hasil = cekTypeImageUpload($tipe_file); 
if ($hasil == 1){
    echo "<script language='javascript'>alert('Silahkan Upload Foto bertipe JPG')</script>";
     echo "<script language='javascript'>window.location = '../crud_gambar/form_simpan.php'</script>";
     exit();
  }

  
// Rename nama fotonya dengan menambahkan tanggal dan jam upload
$fotobaru = date('dmYHis').$foto;
// Set path folder tempat menyimpan fotonya
$path = "upload/".$fotobaru;
// Proses upload
if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
  // Proses simpan ke Database
  $query = "INSERT INTO siswa VALUES('".$nim."', '".$nama."', '".$jenis_kelamin."', '".$telp."', '".$alamat."', '".$fotobaru."')";
  $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: index.php"); // Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
  }
}else{
  // Jika gambar gagal diupload, Lakukan :
  echo "Maaf, Gambar gagal untuk diupload.";
  echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
}
?>  