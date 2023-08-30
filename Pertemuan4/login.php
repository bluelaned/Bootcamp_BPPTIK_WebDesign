<?php

$user_name = "root";
$password  = "";
$database  = "db_belajar"; 
$host_name = "localhost";
 
$connect_db=mysql_connect($host_name, $user_name, $password);
$find_db=mysql_select_db($database);



$nama = @$_POST['nama'];
$username = @$_POST['username'];
$email = @$_POST['email'];

$sql_simpan = mysql_query ("INSERT into data_diri (nama, username, email) VALUES ('$nama', '$username', '$email')");
if($sql_simpan) {
 echo "Data berhasil disimpan";
} else {
 echo "Data gagal disimpan";
}
?>