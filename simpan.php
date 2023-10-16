<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id_karyawan   = $_POST['id_karyawan'];
$nik           = $_POST['nik'];
$nama_lengkap  = $_POST['nama_lengkap'];
$jabatan       = $_POST['jabatan'];
$jam_masuk     = $_POST['jam_masuk'];
$jam_pulang    = $_POST['jam_pulang'];


var_dump($_POST);
die();

//query insert data ke dalam database
$query = "INSERT INTO tbl_riwayat_absen (nik, nama_lengkap, jabatan, jam_masuk, jam_pulang) VALUES ('$nik', '$nama_lengkap', '$jabatan', '$jam_masuk', '$jam_pulang')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>