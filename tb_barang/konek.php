<?php

//include koneksi database
include('../konek.php');

//get data dari form
$id_kategori   = $_POST['id_kategori'];
$id_supplier   = $_POST['id_supplier'];
$nama           = $_POST['nama_br'];
$stock            = $_POST['stock'];
$harga_modal       = $_POST['harga_modal'];
$harga_jual      = $_POST['harga_jual'];
$tanggal_masuk     = $_POST['tanggal_masuk'];

//query insert data ke dalam database
$query = "INSERT INTO tb_barang ( id_kategori, id_supplier, nama_br, stock, harga_modal, harga_jual,  tanggal_masuk) VALUES ( '$id_kategori', '$id_supplier', '$nama', '$stock', '$harga_modal', '$harga_jual', '$tanggal_masuk')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index_bg.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}
