<?php

//include koneksi database
include('../konek.php');

//get data dari form
$nama           = $_POST['nama'];
$alamat             = $_POST['alamat'];
$hp                  = $_POST['hp'];
$email                  = $_POST['email'];
$tanggal_berdiri    = $_POST['tanggal_berdiri'];
$npwp                  = $_POST['npwp'];

//query insert data ke dalam database
$query = "INSERT INTO tb_perusahaan (nama, alamat, hp, email, tanggal_berdiri, npwp) VALUES ('$nama',  '$alamat', '$hp', '$email', '$tanggal_berdiri', '$npwp')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index_ps.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>