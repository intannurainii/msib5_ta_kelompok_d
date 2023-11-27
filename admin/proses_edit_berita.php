<?php 
include '../koneksi.php';

$id_berita = $_GET['id_berita'];

$judul_berita = $_POST["judul_berita"];
$nama_kategori = $_POST["id_kategori"];
$isi_berita = $_POST["isi_berita"];
$tanggal_publish = $_POST["tanggal_publish"];
$nama_penulis = $_POST["id_penulis"];

// Handle upload gambar
if ($_FILES["fileToUpload"]["size"] != 0) { 
    $target_dir = "../img/berita"; 
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); 
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) { 
        echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.<br>";
    } else {
        echo "Sorry, there was an error uploading your file.<br>";
    }
    $result = mysqli_query($conn, "UPDATE `berita` SET `judul_berita` = '$judul_berita', `id_kategori` = '$nama_kategori', `isi_berita` = '$isi_berita', `tanggal_publish` = '$tanggal_publish', `id_penulis` = '$nama_penulis', `gambar_berita` = '$target_file' WHERE `id_berita` = '$id_berita'");
} else {
    $result = mysqli_query($conn, "UPDATE `berita` SET `judul_berita` = '$judul_berita', `id_kategori` = '$nama_kategori', `isi_berita` = '$isi_berita', `tanggal_publish` = '$tanggal_publish', `id_penulis` = '$nama_penulis' WHERE `id_berita` = '$id_berita'");
}

if ($result) {
    echo "Update berhasil";
} else {
    echo "Update gagal: " . mysqli_error($conn);
}

header("Location: berita.php");
?>
