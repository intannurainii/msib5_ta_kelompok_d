<?php
include 'koneksi.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action'])) {
        if ($_POST['action'] === 'newsLetter') {
            $email = $_POST["email"];

            $checkQuery = mysqli_query($conn, "SELECT * FROM `newsletter` WHERE `email_newsletter` = '$email'");
            $existingData = mysqli_fetch_assoc($checkQuery);

            if ($existingData) {
                echo '<div class="alert alert-danger mt-2" role="alert">Email has been registered.</div>';
            } else {
                $result = mysqli_query($conn, "INSERT INTO `newsletter` (`email_newsletter`) VALUES ('$email');");
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

            $result = mysqli_query($conn, "INSERT INTO `contact` (`name_contact`, `email_contact`, `subject_contact`, `message_contact`) VALUES ('$name', '$email', '$subject', '$message');");


            if ($result) {
                echo '<div class="alert alert-success" role="alert">Your message has been sent successfully</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Failed to send message</div>';
            }
        } elseif ($_POST['action'] === 'formComment') {
            $id_berita = $_POST["id_berita"];
            $nama = $_POST["nama"];
            $isi = $_POST["isi_komen"];

            $result = mysqli_query($conn, "INSERT INTO `komen` (`id_berita`, `nama`, `isi_komen`) VALUES ('$id_berita','$nama','$isi');");
            if ($result) {
                // Ambil data yang baru saja diinsert
                $new_comment_result = mysqli_query($conn, "SELECT * FROM `komen` WHERE id_komen = LAST_INSERT_ID();");
                $new_comment_data = mysqli_fetch_assoc($new_comment_result);

                // total coment
                $sql = "SELECT * FROM komen Where id_berita = $id_berita ";
                $hasil = mysqli_query($conn, $sql);
                $jumlah_komen = mysqli_num_rows($hasil);
                // total coment
                
                header('Content-Type: application/json');
                $data['total_komen'] = '<h3 class="section-title">'. $jumlah_komen .' comments</h3>';
                $data['message'] = '<div class="alert alert-success" role="alert">Your reply has been successfully sent</div>';
                $data['komen'] = '
        <ul class="comment-list">
            <li class="comment">
                <div class="comment-body">
                    <div class="comment-avatar">
                        <img alt="" src="img/content/single/komen1.jpg" height="42" width="42">
                    </div>
                    <div class="comment-text">
                        <h6 class="comment-author">
                            <p>' . $new_comment_data['nama'] . '</p>
                        </h6>
                        <div class="comment-metadata">
                            <a href="#" class="comment-date">' . $new_comment_data['tgl'] . '</a>
                        </div>
                        <p>' . $new_comment_data['isi_komen'] . '</p>
                    </div>
                </div>
            </li>
        </ul>';
                echo json_encode($data);
            } else {
                echo '<div class="alert alert-danger" role="alert">Failed to send message</div>';
            }
        }
    }
}
