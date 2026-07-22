<?php include "connection.php";

$vjurusan=$_POST['nama_jurusan'];
$vbelajar = $_POST['tahun_belajar'];
$vtempat = $_POST['tempat_belajar'];
$vdeskripsi = $_POST['deskripsi'];

//mysqli_query adalah perintah untuk menyamtukan koneksi database dengan uery tabel.
$sql_insert = mysqli_query($koneksi, "INSERT INTO education
(nama_jurusan,tahun_belajar,tempat_belajar,deskripsi)
values('$vjurusan','$vbelajar','$vtempat','$vdeskripsi')");

header("location:tabel_education.php");