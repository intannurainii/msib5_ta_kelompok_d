<?php 

include '../koneksi.php';

$nama_penulis = $_POST["nama_penulis"];
$email_penulis = $_POST["email_penulis"];
$foto_profil = $_POST["foto_profil"];

// Upload Proses
if($_FILES["fileToUpload"]["size"]!=0){ 
    $target_dir = "img/berita/"; 
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); 
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) { 
        echo "The file ". htmlspecialchars(basename($_FILES["fileToUpload"]["name"])). " has been uploaded.<br>";
    } else {
        echo "Sorry, there was an error uploading your file.<br>";
    }
    $result = mysqli_query($conn, "UPDATE `penulis` set `nama_penulis` = '$nama_penulis', `email_penulis` = '$email_penulis', `foto_profil` = '$target_file' where `id_penulis` = '$_GET[id_penulis]'");
}

$result = mysqli_query($conn, "UPDATE `penulis` set `nama_penulis` = '$nama_penulis', `email_penulis` = '$email_penulis' where `id_penulis` = '$_GET[id_penulis]'");

header("Location:penulis.php");

?>

