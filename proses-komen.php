<?php
//Include file koneksi ke database
include "koneksi.php";

if (isset($_POST['submit'])) {
    

    $id_berita = $_POST["id_berita"];
    $nama = $_POST["nama"];
    $isi = $_POST["isi_komen"];

    $result = mysqli_query($conn, "INSERT INTO `komen` (`id_berita`, `nama`, `isi_komen`) VALUES ('$id_berita','$nama','$isi');");

    echo "<script>window.history.go(-1);</script>";
exit;
}
?>
