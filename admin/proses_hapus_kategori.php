<?php 
include '../koneksi.php';

$result = mysqli_query($conn, "DELETE from kategori where `id_kategori` = '$_GET[id_kategori]'");

header("Location:kategori.php");

?>