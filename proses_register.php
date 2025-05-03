<?php
session_start();
include "koneksi.php";

$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO petugas (nama, email, password) VALUES ('$nama','$email', md5('$password'))";
$query = mysqli_query($koneksi,$sql);

if ($query) {
    header ("location:login.php?silahkanlogin");
    exit;
} else {
    header ("location:register.php?gagal");
    exit;
}

?>