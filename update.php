<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id_karyawan   = $_POST['id_karyawan'];
$nik           = $_POST['nik'];
$nama_lengkap  = $_POST['nama_lengkap'];
$jabatan       = $_POST['jabatan'];
$jam_masuk     = $_POST['jam_masuk'];
$jam_keluar    = $_POST['jam_keluar']

//query update data ke dalam database berdasarkan ID
$query = "UPDATE tbl_riwayat_absen SET nik = '$nik', nama_lengkap = '$nama_lengkap', jabatan = '$jabatan', jam_masuk = '$jam_masuk', jam_keluar = '$jam_keluar WHERE id_karyawan = '$id_karyawan'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>