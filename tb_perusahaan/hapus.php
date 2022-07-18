<?php

include('../konek.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM tb_perusahaan WHERE id_perusahaan = '$id'";

if($connection->query($query)) {
    header("location: index_ps.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>