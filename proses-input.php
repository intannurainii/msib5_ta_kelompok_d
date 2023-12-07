<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action'])) {
        if ($_POST['action'] === 'newsLetter') {
            $email = $_POST["email"];

            $checkQuery = mysqli_prepare($conn, "SELECT * FROM `newsletter` WHERE `email_newsletter` = ?");
            mysqli_stmt_bind_param($checkQuery, 's', $email);
            mysqli_stmt_execute($checkQuery);

            $existingData = mysqli_stmt_fetch($checkQuery);

            if ($existingData) {
                echo '<div class="alert alert-danger mt-2" role="alert">Email has been registered.</div>';
            } else {
                $insertQuery = mysqli_prepare($conn, "INSERT INTO `newsletter` (`email_newsletter`) VALUES (?)");
                mysqli_stmt_bind_param($insertQuery, 's', $email);
                $result = mysqli_stmt_execute($insertQuery);

                if ($result) {
                    echo '<div class="alert alert-success mt-2" role="alert">Email successfully subscribed</div>';
                } else {
                    echo '<div class="alert alert-danger mt-2" role="alert">Failed to subscribe</div>';
                }
            }
        } elseif ($_POST['action'] === 'contactForm') {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $subject = $_POST["subject"];
            $message = $_POST["message"];

            $insertQuery = mysqli_prepare($conn, "INSERT INTO `contact` (`name_contact`, `email_contact`, `subject_contact`, `message_contact`) VALUES (?, ?, ?, ?)");
            mysqli_stmt_bind_param($insertQuery, 'ssss', $name, $email, $subject, $message);
            $result = mysqli_stmt_execute($insertQuery);

            if ($result) {
                echo '<div class="alert alert-success" role="alert">Your message has been sent successfully</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Failed to send message</div>';
            }
        }
    }
}

if (isset($_POST['komen'])) {


    $id_berita = $_POST["id_berita"];
    $nama = $_POST["nama"];
    $isi = $_POST["isi_komen"];

    $result = mysqli_query($conn, "INSERT INTO `komen` (`id_berita`, `nama`, `isi_komen`) VALUES ('$id_berita','$nama','$isi');");

    echo "<script>window.history.go(-1);</script>";
    exit;
}
