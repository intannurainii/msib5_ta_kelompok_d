<?php 
include '../koneksi.php';

$judul_berita = $_POST["judul_berita"];
$gambar_berita = $_POST["gambar_berita"];
$id_kategori = $_POST["id_kategori"];
$isi_berita = $_POST["isi_berita"];
$tanggal_publish = $_POST["tanggal_publish"];
$id_penulis = $_POST["id_penulis"];
$id_komen = $_POST["id_komen"];


$result = mysqli_query($conn, "INSERT INTO `berita` (`judul_berita`, `gambar_berita`, `id_kategori`, `isi_berita`, `tanggal_publish`, `id_penulis`, `id_komen`) VALUES ('$judul_berita', '$gambar_berita', '$id_kategori', '$isi_berita', '$tanggal_publish', '$id_penulis', '$id_komen');");

header("Location:kategori.php");

?>