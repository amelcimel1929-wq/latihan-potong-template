<?php
include "connection.php";

// $vnama untuk penyimpanan sedangkan $_POST menerima inputan name="nama" dari form_tools.php
$id_tools = $_POST['id_tools'];
$vnama   = $_POST['nama'];
$vicon   = $_POST['icon'];

if ($id_tools == '' || $vnama == '' || $vicon == '') {
    header("Location:tabel_tools.php");
    exit;
}

$update_tools = mysqli_query($koneksi, "UPDATE tools SET nama='$vnama',
icon='$vicon' WHERE id_tools='$id_tools'");

header("Location:tabel_tools.php");
exit;
