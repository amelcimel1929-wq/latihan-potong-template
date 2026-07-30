<?php
include "connection.php";


$vnama = $_POST['nama'];
$vjabatan = $_POST['jabatan'];
$vcompany = $_POST['perusahaan'];
$vphone = $_POST['phone'];
$vemail = $_POST['email'];



$sql_insert = mysqli_query($koneksi, 
"INSERT INTO reference
(nama, jabatan, perusahaan, phone, email)

VALUES

('$vnama',
 '$vjabatan',
 '$vcompany',
 '$vphone',
 '$vemail')"
);



if($sql_insert){

    header("location:tabel_reference.php");

}else{

    echo "Data gagal ditambahkan";

}

?>