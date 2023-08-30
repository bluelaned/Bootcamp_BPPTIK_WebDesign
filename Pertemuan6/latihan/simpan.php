<?php
include "connect.php";

$nama=$_POST["nama"];
$username=$_POST["username"];
$email=$_POST["email"];
$password=$_POST["password"];
$jenis_kelamin=$_POST["jenis_kelamin"];
$agama=$_POST["agama"];


 $sql="insert into biodata (nama,username,email,password,jenis_kelamin,agama) values
		('$nama','$username','$email','$password','$jenis_kelamin','$agama')";



  $hasil=mysqli_query($kon,$sql);


  if ($hasil) {
	echo "<b>Berhasil insert data</b>";
	exit;
  }
else {
	echo "Gagal insert data";
	exit;
}  

?>