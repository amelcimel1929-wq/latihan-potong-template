<?php include "connection.php";

$vnama=$_POST['nama_skill'];


//mysqli_query adalah perintah untuk menyamtukan koneksi database dengan uery tabel.
$sql_insert = mysqli_query($koneksi, "INSERT INTO skill
(nama_skill)
values('$vnama')");

header("location:tabel_skill.php");