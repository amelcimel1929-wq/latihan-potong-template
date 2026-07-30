<?php
include "connection.php";

// $vnama untuk penyimpanan sedangkan $_POST menerima inputan
// name="judul_portfolio" dr form_portfolio.php
// untuk membuat nama secara random hrs menggunakan time(); dgn ekstensi ".jpg"
$ekstensi = pathinfo($_FILES['sidebar_photo']['name'], PATHINFO_EXTENSION);
$namaimage = time() . "." . $ekstensi;

// untuk menyimpan file foto yang nanti ditambahkan dari file form_portfolio
$path = "foto/";

// mysqli_query adalah perintah utk menyatukan koneksi database dengan query tabel.
// (judul_portfolio, img, link, deskripsi) adalah nama2 kolom database
// ('$vjudul', '$vimg', '$vlink', '$vdeskripsi') adalah variabel di atas yang sudah
// kita bikin sebelumnya.

// untuk meng-upload foto digunakan fungsi move_uploaded_file
move_uploaded_file($_FILES['sidebar_photo']['tmp_name'], $path . $namaimage);

$sql_insert = mysqli_query(
    $koneksi,
    "INSERT INTO sidebar_photo(sidebar_photo)
    VALUES ('$namaimage')"
);

// header location untuk mengarahkan halaman ke tabel_profile
header("Location:tabel_sidebar_photo.php");
exit;
?>
