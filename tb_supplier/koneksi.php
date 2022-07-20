<?php

//include koneksi database
include('../konek.php');

//get data dari form
$id_supplier    = $_POST['id_supplier'];
$nama_sp           = $_POST['nama_sp'];
$hp             = $_POST['hp'];
$alamat         = $_POST['alamat'];
$no_rekening    = $_POST['no_rekening'];

//query insert data ke dalam database
$query = "INSERT INTO tb_supplier (id_supplier, nama_sp, hp, alamat, no_rekening) VALUES ('$id_supplier', '$nama_sp', '$hp', '$alamat', '$no_rekening')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index_sp.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>