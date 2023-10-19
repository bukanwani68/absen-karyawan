<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$nik           = $_POST['nik'];
$nik1          = $_POST["nik_1"];
$nama_pegawai  = $_POST['nama_pegawai'];
$jabatan       = $_POST['jabatan'];



//query update data ke dalam database berdasarkan ID
$query = "UPDATE tbl_riwayat_absen SET nik = $nik, nama_pegawai = '$nama_pegawai', jabatan = '$jabatan' WHERE nik = $nik1";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
$result = mysqli_query($connection, $query);
header("Location: index.php")


?>