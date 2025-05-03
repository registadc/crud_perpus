<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>

    <form action="proses_login.php" method="post">
        <label>Nama</label>
        <input type="text" name="nama" id=""><br><br>

        <label>Password</label>
        <input type="password" name="password" id=""><br><br>

        <input type="submit" value="simpan">
        <p>Belum punya akun? <a href="register.php">Register</a></p>
    </form>
</body>
</html>