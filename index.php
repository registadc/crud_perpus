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
    <title>perpustakaan</title>
</head>
<body>
    <h1>Tabel Buku</h1>
    <a href="tambah.php"><button>Tambah</button></a><br><br>
    <a href="logout.php"><button>Logout</button></a><br><br>

    <table border="1">
        <tr>
            <th>buku_id</th>
            <th>kategori_id</th>
            <th>judul</th>
            <th>penulis</th>
            <th>tahun terbit</th>
            <th>penerbit</th>
            <th>isbn</th>
            <th>jumlah tersedia</th>
            <th>aksi</th>
        </tr>

        <?php
        while($buku=mysqli_fetch_assoc($query)){
            echo "<tr>";
                echo "<td>" . $buku['buku_id'] . "</td>";
                echo "<td>" . $buku['kategori_id'] . "</td>";
                echo "<td>" . $buku['judul'] . "</td>";
                echo "<td>" . $buku['penulis'] . "</td>";
                echo "<td>" . $buku['tahun_terbit'] . "</td>";
                echo "<td>" . $buku['penerbit'] . "</td>";
                echo "<td>" . $buku['isbn'] . "</td>";
                echo "<td>" . $buku['jumlah_tersedia'] . "</td>";
                echo "<td>";
                    echo "<a href='edit.php?buku_id=" . $buku['buku_id'] . "'>Edit</a>";
                    echo "|";
                    echo "<a href='hapus.php?buku_id=" . $buku['buku_id'] . "'>Hapus</a>";
               echo "<td>";
            echo "</tr>";
        }

        ?>

    </table>
</body>
</html>