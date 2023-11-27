<?php 
include '../koneksi.php';

$result = mysqli_query($conn, "DELETE from berita where `id_berita` = '$_GET[id_berita]'");

header("Location:berita.php");

?>