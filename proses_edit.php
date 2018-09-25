<?php

    include("koneksi.php");

    if(isset($_POST['submit'])) {

        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];

        $sql = "UPDATE user SET nama='$nama',username='$username',email='$email',password='$password' WHERE id=$id";
        $query = mysqli_query($connect,$sql);


        if($query){
            // kalau berhasil alihkan ke halaman index.php dengan status sukses
            header('Location: index.php?status=sukses');
          }else{
            // kalau gagal alihkan ke halaman index.php dengan status gagal
            header('Location: edit.php?status=gagal');
          }
    }

?>