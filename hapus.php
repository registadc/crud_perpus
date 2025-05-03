<?php
include "koneksi.php";

$buku_id = $_GET['buku_id'];
$sql = "DELETE FROM buku WHERE buku_id = '$buku_id'";
$query = mysqli_query($koneksi,$sql);

if($query){
    header ("location:index.php?hapus=sukses");
    exit;
}else{
    header ("location:index.php?hapus=gagal");
    exit;
}
?>