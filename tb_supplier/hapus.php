<?php

include('../konek.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM tb_supplier WHERE id_supplier = '$id'";

if($connection->query($query)) {
    header("location: index_sp.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>