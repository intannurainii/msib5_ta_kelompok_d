<?php
session_start();
include('koneksi.php');
include('functions.php');

if (isUserLoggedIn()) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id_berita = $_POST['id_berita'];
        $id_customer = $_SESSION['kd_cs'];

        // Check if the user has already liked the news
        $query_cek_like = "SELECT id FROM like_berita WHERE id_customer = '$id_customer' AND id_berita = '$id_berita'";
        $result = mysqli_query($conn, $query_cek_like);

        if ($result->num_rows === 0) {
            // If not liked, insert the like
            $query_insert_like = "INSERT INTO like_berita (id_customer, id_berita) VALUES ('$id_customer', '$id_berita')";
            mysqli_query($conn, $query_insert_like);

            // echo "Liked";
        } else {
            // If already liked, remove the like
            $query_delete_like = "DELETE FROM like_berita WHERE id_customer = '$id_customer' AND id_berita = '$id_berita'";
            mysqli_query($conn, $query_delete_like);

            echo "Unliked";
        }
    } else {
        echo "Invalid request.";
    }
} else {
    echo "User not logged in";
};
