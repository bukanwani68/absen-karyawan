<?php

include('koneksi.php');

//get id
$id = $_GET['nik'];

$query = "DELETE FROM tbl_riwayat_absen WHERE nik = '$id'";

if($connection->query($query)) {
    header("location: index.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>