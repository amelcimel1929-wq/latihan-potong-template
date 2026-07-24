<?php
include "connection.php";

// untuk menerima id_profile yang dibawa dari tombol DELETE dari TABEL PROFILE
// menggunakan $id_profile
// $_GET['id_profile']; menyimpan sementara id yang nanti akan digunakan pada
// perintah DELETE di bawahnya.
$id_language = $_GET['id_language'];

// ini perintah SQL untuk mendelete data berdasarkan id profile yang dibawa
$delete = mysqli_query($koneksi, "DELETE FROM language WHERE id_language='$id_language'");

// setelah proses delete dijalankan, maka akan kembali ke file tabel_profile.php
header("Location: tabel_language.php");
?>