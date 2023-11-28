<?php 
include '../koneksi.php';

$nama_kategori = $_POST["nama_kategori"];

$result = mysqli_query($conn, "INSERT INTO `kategori` (`nama_kategori`) VALUES ('$nama_kategori');");

header("Location:kategori.php");

?>