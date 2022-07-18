<?php

//include koneksi database
include('../konek.php');

//get data dari form
$id_kategori      = $_POST['id_kategori'];
$nama           = $_POST['nama'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE tb_kategori SET nama = '$nama' WHERE id_kategori = '$id_kategori'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index_kt.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>