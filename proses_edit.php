<?php
include "koneksi.php";

$buku_id = $_GET['buku_id'];
$kategori_id = $_GET['kategori_id'];
$judul = $_GET['judul'];
$penulis = $_GET['penulis'];
$tahun_terbit = $_GET['tahun_terbit'];
$penerbit = $_GET['penerbit'];
$isbn = $_GET['isbn'];
$jumlah_tersedia = $_GET['jumlah_tersedia'];


$sql = "UPDATE buku SET
        kategori_id = '$kategori_id',
        judul = '$judul',
        penulis = '$penulis',
        tahun_terbit = '$tahun_terbit',
        penerbit = '$penerbit',
        isbn = '$isbn',
        jumlah_tersedia = '$jumlah_tersedia'
        WHERE buku_id = '$buku_id'";
$query = mysqli_query($koneksi,$sql);

if($query){
    header ("location:index.php?edit=sukses");
    exit;
}else{
    header ("location:index.php?edit=gagal");
    exit;
}


?>