<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "dbwisatadepok1";
// Koneksi ke database agar dapat menggunakan query select didalam view 
$connect = mysqli_connect($server,$username,$password,$database) or die ("Gagal");
?>