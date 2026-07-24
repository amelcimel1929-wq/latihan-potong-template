<?php

include "connection.php";

// mengambil data dari form_portfolio.php
$vjudul = $_POST['judul_portfolio'];
$vlink = $_POST['link'];
$vdeskripsi = $_POST['deskripsi'];
$vjenis = $_POST['jenis'];

// foto wajib dipilih saat menambah portfolio
if (empty($_FILES['img']['name'])) {
    echo "Foto belum dipilih.";
    exit;
}

// membuat nama foto dari waktu upload + ekstensi foto asli
$ekstensi = pathinfo($_FILES['img']['name'], PATHINFO_EXTENSION);
$vimage = time() . "." . $ekstensi;
$path = "foto/";

// menyimpan foto ke folder foto
move_uploaded_file($_FILES['img']['tmp_name'], $path . $vimage);

// menyimpan semua data ke tabel portfolio
$sql_insert = mysqli_query($koneksi, "INSERT INTO portfolio
(judul_portfolio, img, link, deskripsi, jenis)
VALUES ('$vjudul', '$vimage', '$vlink', '$vdeskripsi', '$vjenis')");

if ($sql_insert) {
    header("Location: tabel_portfolio.php");
} else {
    echo "Gagal insert: " . mysqli_error($koneksi);
}
?>
