<?php 

include '../koneksi.php';

$nama_kategori = $_POST["nama_kategori"];

$result = mysqli_query($conn, "UPDATE `kategori` set `nama_kategori` = '$nama_kategori' where `id_kategori` = '$_GET[id_kategori]'");

header("Location:kategori.php");

?>