<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "tugas1";

$connect = mysqli_connect($host, $user, $pass , $db);
// $select = mysqli_select_db($db,$connect);

if ($connect) {
	// echo "Terhubung";
	return $connect;
}else{
	echo "Gagal";
}

?>
