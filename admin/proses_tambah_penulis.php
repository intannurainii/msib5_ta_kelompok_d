<?php 
include '../koneksi.php';

$nama_penulis = $_POST["nama_penulis"];
$email_penulis = $_POST["email_penulis"];

// Upload Proses
$target_dir = "../img/berita/"; 
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); 
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) { 
    echo "The file ". htmlspecialchars(basename($_FILES["fileToUpload"]["name"])). " has been uploaded.<br>";
} else {
    echo "Sorry, there was an error uploading your file.<br>";
}

$result = mysqli_query($conn, "INSERT INTO `penulis` (`nama_penulis`, `email_penulis`, `foto_profil`) VALUES ('$nama_penulis', '$email_penulis', '$target_file');");

header("Location:penulis.php");

?>