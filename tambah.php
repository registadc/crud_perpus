<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <h1> Tambah Data</h1>

    <form action="proses_tambah.php" method="get">
        <label> Kategori id</label>
        <input type="number" name="kategori_id" id=""><br><br>
        <label>Judul</label>
        <input type="text" name="judul" id=""><br><br>
        <label>Penulis</label>
        <input type="text" name="penulis" id=""><br><br>
        <label>Tahun terbit</label>
        <input type="year" name="tahun_terbit" id=""><br><br>
        <label>Penerbit</label>
        <input type="text" name="penerbit" id=""><br><br>
        <label>Isbn</label>
        <input type="number" name="isbn" id=""><br><br>
        <label>Jumlah tersedia</label>
        <input type="number" name="jumlah_tersedia" id=""><br><br>
        
        <input type="submit" value="simpan">
    </form>
</body>
</html>




