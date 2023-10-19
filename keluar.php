<?php

include('koneksi.php');

//get id
$nik = $_GET['nik'];


$query = "UPDATE tbl_riwayat_absen SET jam_pulang = now() WHERE nik = '$nik'";

$result = mysqli_query($connection, $query);
header("Location: index.php");

?>
