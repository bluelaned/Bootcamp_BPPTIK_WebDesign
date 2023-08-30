<?php
include "connect.php";


$username=$_POST["username"];
$password=$_POST["password"];


  $sql="insert into data_diri (username,password) values
		('$username','$password')";


  $hasil=mysqli_query($kon,$sql);


  if ($hasil) {
	echo "Berhasil insert data";
	exit;
  }
else {
	echo "Gagal insert data";
	exit;
}  

?>