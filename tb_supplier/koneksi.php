<?php

//include koneksi database
include('../konek.php');

//get data dari form
$nama           = $_POST['nama'];
$hp             = $_POST['hp'];
$alamat         = $_POST['alamat'];
$no_rekening    = $_POST['no_rekening'];

//query insert data ke dalam database
$query = "INSERT INTO tb_supplier (nama, hp, alamat, no_rekening) VALUES ('$nama', '$hp', '$alamat', '$no_rekening')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index_sp.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>