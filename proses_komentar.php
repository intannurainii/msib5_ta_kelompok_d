<?php 
include 'koneksi.php';

$nama = $_POST["nama"];
$isi_komen = $_POST["isi_komen"];


$result = mysqli_query($conn, "INSERT INTO komen (`nama`, `isi_komen`) VALUES ('$nama','$isi_komen');");

header("Location:single-post.php");

?>