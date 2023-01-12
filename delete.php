<?php

include 'koneksi.php';

if(isset($_GET["id"])){
    $id = $_GET["id"];
    
    $sql = "DELETE FROM pendaftar WHERE id=$id";
    $koneksi->query($sql);
}

header("location: data_pendaftar.php");
exit;

?>