<?php 
include '../koneksi.php';

$result = mysqli_query($conn, "DELETE from penulis where `id_penulis` = '$_GET[id_penulis]'");

header("Location:penulis.php");

?>