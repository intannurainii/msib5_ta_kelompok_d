<?php 
include '../koneksi.php';

if(isset($_GET['berita'])){
    $id_berita = $_GET['berita'];
    $queryDeleteImg = "select * from berita where berita.id_berita = $id_berita";
    $sqlDeleteImg = mysqli_query($conn, $queryDeleteImg);
    $result = mysqli_fetch_array($sqlDeleteImg);
    unlink("../img/berita/" . $result['gambar_berita']);

    $query = "delete from berita where berita.id_berita = $id_berita";
    $sql = mysqli_query($conn, $query);
    if ($sql) {
        header("location: berita.php");
    } else {
        echo $query;
    }
}
if(isset($_GET['penulis'])){
    $id_penulis = $_GET['penulis'];
    $queryDeleteImg = "select * from penulis where penulis.id_penulis = $id_penulis";
    $sqlDeleteImg = mysqli_query($conn, $queryDeleteImg);
    $result = mysqli_fetch_array($sqlDeleteImg);
    unlink("../img/berita/" . $result['gambar_penulis']);

    $query = "delete from penulis where penulis.id_penulis = $id_penulis";
    $sql = mysqli_query($conn, $query);
    if ($sql) {
        header("location: penulis.php");
    } else {
        echo $query;
    }
}
if(isset($_GET['kategori'])){
    $id_kategori = $_GET['kategori'];
    $query = "delete from kategori where kategori.id_kategori = $id_kategori";
    $sql = mysqli_query($conn, $query);
    if ($sql) {
        header("location: kategori.php");
    } else {
        echo $query;
    }
}

?>