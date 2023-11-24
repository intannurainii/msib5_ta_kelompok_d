<?php 
include '../koneksi.php';

$judul_berita = $_POST["judul_berita"];
$gambar_berita = $b["gambar_berita"];
$nama_kategori = $_POST["id_kategori"]; // Ganti dengan nama kolom yang sesuai di database
$isi_berita = $_POST["isi_berita"];
$tanggal_publish = $_POST["tanggal_publish"];
$nama_penulis = $_POST["id_penulis"]; // Ganti dengan nama kolom yang sesuai di database
$isi_komen = $_POST["id_komen"]; // Ganti dengan nama kolom yang sesuai di database

// Handle upload gambar
if($_FILES["fileToUpload"]["size"]!=0){ 
    $target_dir = "../img/"; 
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); 
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) { 
        echo "The file ". htmlspecialchars(basename($_FILES["fileToUpload"]["name"])). " has been uploaded.<br>";
    } else {
        echo "Sorry, there was an error uploading your file.<br>";
    }
    $result = mysqli_query($conn, "UPDATE `penulis` set `nama_penulis` = '$nama_penulis', `email_penulis` = '$email_penulis', `foto_profil` = '$target_file' where `id_penulis` = '$_GET[id_penulis]'");
}

$result = mysqli_query($conn, "UPDATE `penulis` set `nama_penulis` = '$nama_penulis', `email_penulis` = '$email_penulis' where `id_penulis` = '$_GET[id_penulis]'");

header("Location:berita.php");

?>