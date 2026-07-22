<?php

include "connection.php";

$id_portfolio = $_POST['id_portfolio'];

$vjudul = $_POST['judul_portfolio'];
$vimage = $_POST['img'];
$vlink = $_POST['link'];
$vdeskripsi = $_POST['deskripsi'];
$vjenis = $_POST['jenis'];

$update_portfolio = mysqli_query(
    $koneksi,
    "UPDATE portfolio SET
        judul_portfolio = '$vjudul',
        img = '$vimage',
        link = '$vlink',
        deskripsi = '$vdeskripsi',
        jenis = '$vjenis'
     WHERE id_portfolio = '$id_portfolio'"
);

if ($update_portfolio) {
    header("Location: tabel_portfolio.php");
    exit;
} else {
    echo "Gagal update: " . mysqli_error($koneksi);
}

?>