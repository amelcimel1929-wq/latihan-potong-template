<?php
include "connection.php";

// untuk menerima id_profile yang dibawa dari tombol DELETE dari TABEL PROFILE
// menggunakan $id_profile
// $_GET['id_profile']; menyimpan sementara id yang nanti akan digunakan pada
// perintah DELETE di bawahnya.
$id_tools = $_GET['id_tools'];

if ($id_tools == '') {
    header("Location:tabel_tools.php");
    exit;
}

// ini perintah sql untuk mendelete data berdasarkan id_tools yang dibawa
$delete = mysqli_query($koneksi, "DELETE FROM tools WHERE id_tools='$id_tools'");

// setelah proses delete dijalankan, maka akan kembali ke file tabel_tools.php
header("Location: tabel_tools.php");
exit;
?>
