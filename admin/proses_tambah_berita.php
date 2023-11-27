<?php 
include '../koneksi.php';

$judul_berita = $_POST["judul_berita"];
$kategori = $_POST["kategori"]; // Ganti dengan nama kolom yang sesuai di database
$isi_berita = $_POST["isi_berita"];
$tanggal_publish = $_POST["tanggal_publish"];
$penulis = $_POST["penulis"]; // Ganti dengan nama kolom yang sesuai di database

// Handle upload gambar
$target_dir = "../img/berita"; 
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); 
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) { 
    echo "The file ". htmlspecialchars(basename($_FILES["fileToUpload"]["name"])). " has been uploaded.<br>";
} else {
    echo "Sorry, there was an error uploading your file.<br>";
}

$result = mysqli_query($conn, "INSERT INTO `berita` (`judul_berita`, `id_kategori`, `isi_berita`, `tanggal_publish`, `id_penulis`, `gambar_berita`) VALUES ('$judul_berita', '$kategori', '$isi_berita', '$tanggal_publish', '$penulis', '$target_file');");

header("Location:berita.php");

?>