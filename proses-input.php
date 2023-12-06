<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$email = $_POST["email"];


$checkQuery = mysqli_query($conn, "SELECT * FROM `newsletter` WHERE `email_newsletter` = '$email'");
$existingData = mysqli_fetch_assoc($checkQuery);
if ($existingData) {
    echo '<div class="alert alert-danger" role="alert">Email sudah terdaftar.</div>';
}
else{
        $result = mysqli_query($conn, "INSERT INTO `newsletter` (`email_newsletter`) VALUES ('$email');");

        if ($result) {
            echo '<div class="alert alert-success" role="alert">Data Berhasil Dikirim</div>';
        } else {
            echo '<div class="alert alert-danger" role="alert">Gagal mengirim data</div>';
        }
    }

}

if (isset($_POST['contact'])) {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

$result = mysqli_query($conn, "INSERT INTO `contact` (`name_contact`, `email_contact`, `subject_contact`, `message_contact`) VALUES ('$name', '$email', '$subject', '$message');");

    header("Location:contact.php");
exit;
}

if (isset($_POST['komen'])) {
    

    $id_berita = $_POST["id_berita"];
    $nama = $_POST["nama"];
    $isi = $_POST["isi_komen"];

    $result = mysqli_query($conn, "INSERT INTO `komen` (`id_berita`, `nama`, `isi_komen`) VALUES ('$id_berita','$nama','$isi');");

    echo "<script>window.history.go(-1);</script>";
exit;
}

