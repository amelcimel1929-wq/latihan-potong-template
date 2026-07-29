<!-- from file update_form_reference.php -->
<?php
include "connection.php";

// $nama untuk penyimpanan sedangkan $_POST menerima inputan name="nama"
// dari update_form_reference.php
$id_reference = $_POST['id_reference'];
$vreference   = $_POST['nama'];
$vjabatan     = $_POST['jabatan'];
$vcompany     = $_POST['perusahaan'];
$vphone       = $_POST['phone'];
$vemail       = $_POST['email'];

$update_reference = mysqli_query(
    $koneksi,
    "UPDATE reference SET
        nama='$vreference',
        jabatan='$vjabatan',
        perusahaan='$vcompany',
        phone='$vphone',
        email='$vemail'
    WHERE id_reference='$id_reference'"
);

header("Location:tabel_reference.php");
?>