<?php
include "koneksi.php";

$kategori_id = $_GET['kategori_id'];
$judul = $_GET['judul'];
$penulis = $_GET['penulis'];
$tahun_terbit = $_GET['tahun_terbit'];
$penerbit = $_GET['penerbit'];
$isbn = $_GET['isbn'];
$jumlah_tersedia = $_GET['jumlah_tersedia'];

// // 1. Cek apakah kategori sudah ada
// $cekKategori = mysqli_query($koneksi, "SELECT kategori_id FROM kategori_buku WHERE nama_kategori = '$nama_kategori'");
// if (mysqli_num_rows($cekKategori) > 0) {
//     $row = mysqli_fetch_assoc($cekKategori);
//     $kategori_id = $row['kategori_id'];
// } else {
//     // 2. Insert kategori baru
//     mysqli_query($koneksi, "INSERT INTO kategori_buku (nama_kategori) VALUES ('$nama_kategori')");
//     $kategori_id = mysqli_insert_id($koneksi); // ambil id kategori baru
// }

// // 3. Insert data buku
// $query = "INSERT INTO buku (judul, penulis, tahun_terbit, penerbit, isbn, jumlah_tersedia, kategori_id)
//           VALUES ('$judul', '$penulis', '$tahun_terbit', '$penerbit', '$isbn', '$jumlah_tersedia', '$kategori_id')";


$sql = "INSERT INTO buku (kategori_id,judul, penulis, tahun_terbit, penerbit, isbn, jumlah_tersedia)
VALUES ('$kategori_id','$judul', '$penulis', '$tahun_terbit', '$penerbit', '$isbn', '$jumlah_tersedia')";

$query = mysqli_query($koneksi,$sql);

if($query){
    header ("location:index.php?tambah=sukses");
    exit;
}else{
    header ("location:index.php?tambah=gagal");
    exit;
}


?>