
<?php
session_start();
include "koneksi.php";

$nama = $_POST['nama'];
$password = $_POST['password'];

$sql = "SELECT * FROM petugas WHERE nama = '$nama' AND password = md5('$password')";
$query = mysqli_query($koneksi,$sql);

if(mysqli_num_rows($query) == 1){
    $_SESSION['nama'] = $nama;
    header ("location:dashboard.php?login=sukses");
    exit;
}else{
    header ("location:login.php?login=gagal");
    exit;
}

?>
