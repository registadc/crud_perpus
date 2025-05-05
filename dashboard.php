<?php
session_start();
include "koneksi.php";

if (!isset($_SESSION['nama'])){
    header ("location:login.php?pesan=logindulu");
    exit;
}

$sql = "SELECT * from buku";

$query = mysqli_query($koneksi,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan</title>
    <style>

/* Gaya umum */
body {
    font-family: Arial, sans-serif;
    background-color: pink;
    margin: 0;
    padding: 20px;
}

/* Judul halaman */
h1 {
    text-align: center;
    color: #2c3e50;
}

/* Tombol logout */
button {
    background-color: #e74c3c;
    color: white;
    padding: 8px 16px;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #c0392b;
}

/* Setiap entri buku */
h3 {
    text-align: center;
    margin-top: 20px;
    color: #34495e;
}

h4 {
    text-align: center;
    margin-top: 20px;
    color: blueviolet;
}

p {
    margin: 4px 0;
    color: #555;
    font-size: 14px;
}

/* Tambahan efek seperti kartu */
.book-card {
    background-color: white;
    padding: 15px 20px;
    margin: 20px auto; /* auto untuk center, 20px top-bottom */
    border-radius: 12px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    max-width: 500px; /* batasi lebar maksimal */
    width: 100%; /* tetap responsif di perangkat kecil */
}


    </style>
</head>
<body>
    <h1>Data Buku</h1>
    <a href="logout.php"><button>Logout</button></a><br><br>


    <?php while($buku=mysqli_fetch_assoc($query)){ ?>
        <div class="book-card">
            <h3><?=$buku['judul'] ?></h3>
            <h4><?=$buku['penulis'] ?></h4>
            <p><?=$buku['tahun_terbit'] ?></p>
            <p><?=$buku['penerbit'] ?></p>
            <p><?=$buku['isbn'] ?></p>
            <p><?=$buku['tahun_terbit'] ?></>
            <p><?=$buku['jumlah_tersedia'] ?></p>
        </div>

    <?php } ?>
   

    </table>
</body>
</html>
