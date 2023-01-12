<?php

    $koneksi=new mysqli('localhost','root','','db_2');
    if(!$koneksi){
        die(mysqli_error($koneksi));
    }
?>