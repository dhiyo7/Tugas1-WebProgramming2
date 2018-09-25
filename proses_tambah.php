<?php
include("koneksi.php");


if (isset($_POST["tambah"])) {
  $nama = $_POST["nama"];
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];

  $sql = "INSERT INTO user (nama,username,email,password)
      VALUES ('$nama','$username','$email','$password')";
  $query = mysqli_query($connect,$sql);

  if($query){
    // kalau berhasil alihkan ke halaman index.php dengan status sukses
    header('Location: index.php?status=sukses');
  }else{
    // kalau gagal alihkan ke halaman index.php dengan status gagal
    header('Location: tambah.php?status=gagal');
  }
}


 ?>