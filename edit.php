<?php
include "koneksi.php";

$buku_id = $_GET['buku_id'];
$sql = "SELECT * FROM buku WHERE buku_id = $buku_id";
$query = mysqli_query($koneksi, $sql);

while($buku=mysqli_fetch_assoc($query)){


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    <h1>Edit Data</h1>

    <form action="proses_edit.php" method="get">
    <input type="hidden" name="buku_id" value="<?=$buku['buku_id']?>">

    <label>Kategori id</label>
    <input type="number" name="kategori_id" value="<?=$buku['kategori_id']?>"><br><br>
    <label>Judul</label>
    <input type="text" name="judul" value="<?=$buku['judul']?>"><br><br>
    <label>Penulis</label>
    <input type="text" name="penulis" value="<?=$buku['penulis']?>"><br><br>
    <label>Tahun terbit</label>
    <input type="year" name="tahun_terbit" value="<?=$buku['tahun_terbit']?>"><br><br>
    <label>Penerbit</label>
    <input type="text" name="penerbit" value="<?=$buku['penerbit']?>"><br><br>
    <label>Isbn</label>
    <input type="number" name="isbn" value="<?=$buku['isbn']?>"><br><br>
    <label>Jumlah tersedia</label>
    <input type="number" name="jumlah_tersedia" value="<?=$buku['jumlah_tersedia']?>"><br><br>
        
    <input type="submit" value="simpan">
   
    </form>
</body>
</html>




<?php
}
?>