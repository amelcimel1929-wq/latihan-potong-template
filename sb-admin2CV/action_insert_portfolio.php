<?php

include "connection.php";

$vjudul = $_POST['judul_portfolio'];
$vimage = $_POST['img'];
$vlink = $_POST['link'];
$vdeskripsi = $_POST['deskripsi'];
$vjenis = $_POST['jenis'];

$query = mysqli_query(
    $koneksi,
    "INSERT INTO portfolio 
    (judul_portfolio, img, link, deskripsi, jenis)
    VALUES 
    ('$vjudul', '$vimage', '$vlink', '$vdeskripsi', '$vjenis')"
);

if ($query) {
    header("Location: tabel_portfolio.php");
    exit;
} else {
    echo "Gagal insert: " . mysqli_error($koneksi);
}

?>