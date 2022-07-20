<?php

//include koneksi database
include('../konek.php');

//get data dari form
$id_kategori   = $_POST['id_kategori'];
$nama_kt           = $_POST['nama_kt'];

//query insert data ke dalam database
$query = "INSERT INTO tb_kategori (id_kategori ,nama_kt) VALUES ('$id_kategori', '$nama_kt')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index_kt.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>