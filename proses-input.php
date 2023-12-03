<?php
include 'koneksi.php';

if (isset($_POST['newsletter'])) {
$email = $_POST["email"];

$result = mysqli_query($conn, "INSERT INTO `newsletter` (`email_newsletter`) VALUES ('$email');");
    if ($result) {
        // Menyimpan pesan sukses ke session
        $_SESSION['success_message'] = 'Newsletter subscription successful!';
    } else {
        $_SESSION['success_message'] = 'Failed to subscribe to newsletter. Please try again.';
    }

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

