<?php
require_once('koneksi.php');
$id = $_POST['username'];
$password = $_POST['password'];
$query = mysqli_query($koneksi,"select * from admin where username = '$id'and password = '$password'");

if (mysqli_num_rows($query) != 0)
{
    header("location:halaman.php");
}
else
{
    header("location:login.php");
}
?>