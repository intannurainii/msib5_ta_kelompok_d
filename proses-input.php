<?php
include 'koneksi.php';

if (isset($_POST['newsletter'])) {
$email = $_POST["email"];

$result = mysqli_query($conn, "INSERT INTO `newsletter` (`email_newsletter`) VALUES ('$email');");

echo "<script>window.history.go(-1);</script>";
exit;
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

