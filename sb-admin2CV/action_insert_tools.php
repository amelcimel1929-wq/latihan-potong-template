<?php
// Ini adalah langkah kedua setelah dari FORM_TOOLS.PHP.
include "connection.php";

// $vnama untuk penyimpanan sedangkan $_POST menerima inputan name="nama" dr form_profile.php
$vnama = $_POST['nama'];
$vicon = $_POST['icon'];

if ($vnama == '' || $vicon == '') {
    header("Location:form_tools.php");
    exit;
}

// mysqli_query adalah perintah utk menyatukan koneksi database dengan query tabel.
// (nama, about, website, phone, email, city, linkedin) adalah nama2 kolom database
// ('$vnama', '$vdeskripsi', '$vwebsite', '$vphone', '$vemail', '$vcity', '$linkedin')
// adalah variabel di atas yang sudah kita bikin sebelumnya.
$sql_insert = mysqli_query($koneksi, "INSERT INTO tools(nama,icon)
values ('$vnama','$vicon')");

// header location untuk mengarahkan halaman ke tabel_profile
header("Location:tabel_tools.php");
exit;
?>
