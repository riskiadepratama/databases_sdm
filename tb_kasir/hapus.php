<?php

include('../konek.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM tb_kasir WHERE id_kasir = '$id'";

if($connection->query($query)) {
    header("location: index_ks.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>