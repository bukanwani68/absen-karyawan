<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$nik           = $_POST['nik'];
$nama_lengkap  = $_POST['nama_lengkap'];
$jabatan       = $_POST['jabatan'];
$jam_masuk     = $_POST['jam_masuk'];
$jam_pulang    = NULL;


//query insert data ke dalam database
$query = "INSERT INTO tbl_riwayat_absen (nik, nama_pegawai, jabatan, jam_masuk, jam_pulang) VALUES ('$nik', '$nama_lengkap', '$jabatan', '$jam_masuk', '$jam_pulang')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
$result = mysqli_query($connection, $query);

header("Location: index.php");

?>