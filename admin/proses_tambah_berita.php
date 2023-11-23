<?php 
include '../koneksi.php';

$judul_berita = $_POST["judul_berita"];
$nama_kategori = $_POST["id_kategori"]; // Ganti dengan nama kolom yang sesuai di database
$isi_berita = $_POST["isi_berita"];
$tanggal_publish = $_POST["tanggal_publish"];
$nama_penulis = $_POST["id_penulis"]; // Ganti dengan nama kolom yang sesuai di database
$nama = $_POST["id_komen"]; // Ganti dengan nama kolom yang sesuai di database

// Handle upload gambar
$gambar_berita = $_FILES["gambar_berita"]["name"];
$target_dir = "img/"; // Ganti dengan direktori tempat menyimpan gambar
$target_file = $target_dir . basename($_FILES["gambar_berita"]["name"]);
move_uploaded_file($_FILES["gambar_berita"]["tmp_name"], $target_file);

$result = mysqli_query($conn, "INSERT INTO `berita` (`judul_berita`, `gambar_berita`, `id_kategori`, `isi_berita`, `tanggal_publish`, `id_penulis`, `id_komen`) VALUES ('$judul_berita', '$gambar_berita', '$id_kategori', '$isi_berita', '$tanggal_publish', '$id_penulis', '$id_komen')");

if ($result) {
    echo "Berita berhasil ditambahkan!";
} else {
    echo "Error: " . mysqli_error($conn);
}

header("Location:berita.php");
?>
