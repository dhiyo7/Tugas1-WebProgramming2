<?php 

    include("koneksi.php");

    if(isset($_GET['id'])) {

        $id = $_GET['id'];

        $sql = "DELETE FROM user WHERE id=$id";
        $query = mysqli_query($connect,$sql);

        if($query){
            // kalau berhasil alihkan ke halaman index.php dengan status sukses
            header('Location: index.php?status=sukses');
          }else{
            // kalau gagal alihkan ke halaman index.php dengan status gagal
            die("gagal menghapus... ");
          }
    }

?>