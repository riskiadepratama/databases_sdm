<?php

//include koneksi database
include('../konek.php');

//get data dari form
$id_perusahaan   = $_POST['id_perusahaan'];
$nama_cb           = $_POST['nama_cb'];
$alamat_cb            = $_POST['alamat_cb'];
$hp_cb                = $_POST['hp_cb'];
$email_cb             = $_POST['email_cb'];


//query insert data ke dalam database
$query = "INSERT INTO tb_cabang (id_perusahaan, nama_cb, alamat_cb, hp_cb, email_cb ) VALUES ( '$id_perusahaan', '$nama_cb', '$alamat_cb', '$hp_cb', '$email_cb')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index_cb.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}
