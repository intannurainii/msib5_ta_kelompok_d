<?php
include('koneksi.php');

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id_berita = $_GET['id_berita'];
    $query_hitung_berita = "SELECT COUNT(*) AS hitung_like FROM like_berita WHERE id_berita = '$id_berita'";
    $result_hitung = mysqli_query($conn, $query_hitung_berita);
    $total_like = ($result_hitung) ? $result_hitung->fetch_assoc()['hitung_like'] : 0;

    echo $total_like;
} else {
    echo "Invalid request.";
}
