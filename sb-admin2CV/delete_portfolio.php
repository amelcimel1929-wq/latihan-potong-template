<?php

include "connection.php";

$id_portfolio=$_GET['id_portfolio'];

// ini perintah sql untuk mendelete data mendasarkan id_job yang dibawa 
$delete = mysqli_query($koneksi, "DELETE FROM portfolio WHERE id_portfolio='$id_portfolio'");

// setelah proses delete dijalankan, maka akan kembali ke file tabel_job.php
header("Location: tabel_portfolio.php");