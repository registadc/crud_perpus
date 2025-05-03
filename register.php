<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>

    <form action="proses_register.php" method="post">
        <label for="">Nama</label>
        <input type="text" name="nama" id=""><br><br>

        <label>Email</label>
        <input type="text" name="email" id=""><br><br>

        <label>Password</label>
        <input type="password" name="password" id=""><br><br>

        <input type="submit" value="register">
        <p>Sudah punya akun? <a href="login.php">Login</a></p>
    </form>
</body>
</html>